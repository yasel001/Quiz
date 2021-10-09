<?php
//EL FILALI Yassine 2IG

class QuizManager
{
    private function nbQuest()  // Retourne le nombre de question qu'il y a au total dans la db
    {
            //Instancier
        $db = new DBManager();

            //Requete
        $requete = $db->getBdd()->prepare("SELECT COUNT(*) FROM quiz");

            //Execution de l'instruction
        $requete->execute();

        $resultat = $requete->fetch();
        $requete->closeCursor();

        return $resultat[0];
    }

    public function initialisation()   //S'occupe de l'initialisation du quiz
    {  
        if (!isset($_SESSION["numero_question"]))  // Initialisation lors de la premiere question
        {
            $_SESSION["numero_question"] = 1;     // Numero de question
            $_SESSION["numero_tire"] = [];       //Numero question tiree
            $_SESSION["reponseUser"] = [];       //Reponse de l'utilisateur
            $_SESSION["score"] = 0;              //Point
        } else {                      // Initialisation lors des tirages des autres questions
            $copie_repUser = $_SESSION['reponseUser'];
            $copie_repUser[] = $_POST["rep"];
            $_SESSION["reponseUser"] = $copie_repUser;
            if ($_POST["rep"] == $_SESSION["ok"]) {
                $_SESSION["score"]++;
            }
            $_SESSION["numero_question"]++;
        }
    }

    public function tirageQuest()  // S'occupe de tirer un numero aleatoire de question et de retourner ce numero
    {     
            //Instancier
        $questionManager = new QuestionManager();

            //On copie ce qu'il y a dans le tableau de session
        $copie_numTire = $_SESSION["numero_tire"];

        $tirage = TRUE; // flag qui dit s'il faut continuer a generer ou pas
        while ($tirage) {
            $nbre_tire = rand(1, $this->nbQuest());  // Générer un nombre aléatoire compris entre 1 et le numero de question
            if ($questionManager->questionExist($nbre_tire, $_SESSION['themeName']) == 1) { //Verifie que la question existe
                if (!in_array($nbre_tire, $copie_numTire)) { //Vérifier que le numero n'est pas déja sorti
                    $copie_numTire[] = $nbre_tire;
                    $_SESSION["numero_tire"] = $copie_numTire;
                    $tirage = FALSE;
                }
            }
        }
        return $nbre_tire;
    }

    public function resumeQuiz()   //Permet de créer un tableau associatif 
                            //contenant les questions, bonnes reponses 
                            //et les reponses données par le joueur
    { 
            //On instancie
        $questionManager = new QuestionManager();

            //Creation d'un compteur
        $compteurIndice = 0;
            //Declaration tableau qui contoendra les question, reponse de l'utilisateur ainsi que les bonnes reponse
        $tableauQuestionReponsePartie = array();

        foreach ($_SESSION['numero_tire'] as $key) {        //Parcours le tableau contnenant les differente id de question qui ont ete tire durant la partie
            $infoQuestion = $questionManager->getARowbyID($key);    //On recuperere la question et ses reponses

            $bonneReponse = $this->numberToString($infoQuestion, $infoQuestion['reponse']); //Recupere la bonne reponse
            $reponseUser = $this->numberToString($infoQuestion, $_SESSION['reponseUser'][$compteurIndice]); //Recupere la reponse de l'utilisateur

            $tableauQuestionReponsePartie[$compteurIndice] = array(
                'qu' => $infoQuestion['question'],
                'repO' => $bonneReponse,
                'repUser' => $reponseUser
            );
            $compteurIndice++;
        }
        return $tableauQuestionReponsePartie;
    }

    private function numberToString(Array $ligne, Int $position)
    {                                       /*  Retourne en francais la reponse 
                                                correspondant au numero 'position' passé en parametre, cela est possible 
                                                car on lui passe egalement la ligne correspondant a la question
                                            */
        switch ($position) {
            case 1:
                $phrase = $ligne['r1'];
                break;
            case 2:
                $phrase = $ligne['r2'];
                break;
            case 3:
                $phrase = $ligne['r3'];
                break;
            case 4:
                $phrase = $ligne['r4'];
                break;
        }
        return $phrase;
    }
}
