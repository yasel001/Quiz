<?php
//EL FILALI Yassine 2IG

class QuestionManager
{
    public function insertQuestion(Question $question)  //Methode d'insertion de question
    {         
            //On instancie la classe DBManager
        $bd = new DBManager();

            //On récupere les infos de la question 
        $quest = $question->question;
        $rep1 = $question->r1;
        $rep2 = $question->r2;
        $rep3 = $question->r3;
        $rep4 = $question->r4;
        $repCorrecte = $question->reponse;
        $thematique = $question->theme;

            //Recuperation de l'id de la dernière question
        $lastID = $this->getLastId();

        if($lastID == null) $lastID = 1;    //Si on récupére un id qui est null, on le met à 1
        
            // Requete SQL pour inserer la question dans la DB
        $req = $bd->getBdd()->prepare("INSERT INTO quiz ( num_quest, question, r1, r2, r3, r4, reponse, theme ) VALUES (:num_quest, :question, :r1, :r2, :r3, :r4, :reponse, :thematique )");

            //Lier variable au marqueur ':'
        $req->bindParam(":num_quest", $lastID);
        $req->bindParam(":question", $quest);
        $req->bindParam(":r1", $rep1);
        $req->bindParam(":r2", $rep2);
        $req->bindParam(":r3", $rep3);
        $req->bindParam(":r4", $rep4);
        $req->bindParam(":reponse", $repCorrecte);
        $req->bindParam(":thematique", $thematique);

            //Executer l'instruction
        $insertAgree = $req->execute();

        return $insertAgree;
    }

    public function updateQuestion(Question $question) //Mise a jour de la question dans la db
    {      
            //Instancier DB
        $db = new DBManager();

            //On recupere info de la question reçue en parametre
        $numQuest = $question->num_quest;
        $quest = $question->question;
        $rep1 = $question->r1;
        $rep2 = $question->r2;
        $rep3 = $question->r3;
        $rep4 = $question->r4;
        $repCorrecte = $question->reponse;
        $thematique = $question->theme;

            //Mise a jour de la question dans la base de donnée dans la table quiz
        $req = $db->getBdd()->prepare("UPDATE quiz SET question=:question, r1=:r1, r2=:r2, r3=:r3, r4=:r4, reponse=:reponse, theme=:thematique WHERE num_quest=:id");

            //Lie variable a un marqueur ':'
        $req->bindParam(":question", $quest);
        $req->bindParam(":r1", $rep1);
        $req->bindParam(":r2", $rep2);
        $req->bindParam(":r3", $rep3);
        $req->bindParam(":r4", $rep4);
        $req->bindParam(":reponse", $repCorrecte);
        $req->bindParam(":thematique", $thematique);
        $req->bindParam(":id", $numQuest);

            //Executer l'instruction
        $modifyOk = $req->execute();

        return $modifyOk;
    }

    public function deleteQuestion(Int $uidQuestion)   // Suppression question
    {      
            //Instancier DB
        $db = new DBManager();

            //Instruction
        $req = $db->getBdd()->prepare("DELETE FROM quiz WHERE num_quest=:id");

            //Lier variable a un marqueur ':'
        $req->bindParam(":id", $uidQuestion);

            //Executer l'instruction
        $req->execute();
    }

    private function getLastId()    //Permet de recuperer le dernier ID de la base de donnee table quiz
    {       
            //Instancier
        $bd = new DBManager();

            //Instruction qui permet de connaitre le premier trou dispo dans la base de donnée
        $req = $bd->getBdd()->prepare("SELECT MIN(num_quest + 1) FROM quiz WHERE (num_quest + 1) NOT IN (SELECT num_quest FROM quiz)");

            //Execution de la requete
        $req->execute();

        $resultLast = $req->fetch();
        $req->closeCursor();

        return $resultLast[0];
    }

    public function getAllQuestion(Int $idTheme)   // Fonction recuperant toutes les questions de la db
    {      
            //Instancier
        $db = new DBManager();

        if($idTheme == 0){      //Si l'utilisateur choisi "tous" on lui affiche toute les question
                //Instruction
            $req = $db->getBdd()->prepare("SELECT * FROM quiz ORDER BY num_quest ASC");
        }
        else{                   //Si l'utilisateur a choisi un theme specifique on lui liste les questions correspondant a ce theme
                //Instruction
            $req = $db->getBdd()->prepare("SELECT * FROM quiz WHERE theme=:thematique ORDER BY num_quest ASC");
            
                //Lier une variable aux marque ':'
            $req->bindParam(":thematique", $idTheme);
        }

            //Execution de l'instruction 
        $req->execute();

            //Retourner un tableau contenant toute le resultat de la commande
        $questionAll = $req->fetchAll();
        $req->closeCursor();
        
        return $questionAll;
    }

    public function getARowbyID(Int $uidQuestion)  // Renvoie les infos de la question correspondant a l'id
    {      
            //Instancier
        $db = new DBManager();

            //Instruction
        $requete = $db->getBdd()->prepare("SELECT * FROM quiz WHERE num_quest=:numquest");

            //Lier une variable aux marqueur
        $requete->bindParam(":numquest", $uidQuestion);

            //Execution de l'instruction
        $requete->execute();

        $resultat = $requete->fetch();
        $requete->closeCursor();

        return $resultat;
    }

    public function questionExist(Int $idNumQuestion, Int $idTheme) //Verifie si la question existe
    {
            //Instancier
        $db = new DBManager();
        
            //Requete qui compte le nombre d'occurence de la question
        if($idTheme == 0){
            $requete = $db->getBdd()->prepare("SELECT COUNT(*) FROM quiz WHERE num_quest = :id");
        }
        else{
            $requete = $db->getBdd()->prepare("SELECT COUNT(*) FROM quiz WHERE num_quest = :id AND theme = :thematique");
            $requete->bindParam(":thematique", $idTheme);
        }

            //Associe variable et ':'
        $requete->bindParam(":id", $idNumQuestion);
        $requete->execute();

        $isExiste = $requete->fetch();
        $requete->closeCursor();

        return $isExiste[0];
    }

    public function countQuestionBytheme(Int $idTheme) // Compte le nombre de question en fonction du theme
    { 
            //Instancier
        $db = new DBManager();
        
            //Requete qui compte le nombre d'occurence de la question selon theme
        $requete = $db->getBdd()->prepare("SELECT COUNT(*) FROM quiz WHERE theme = :thematique");
            
            //Associe variable et marqueur ':'
        $requete->bindParam(":thematique", $idTheme);

            //Execution de l'instruction
        $requete->execute();

        $nbre = $requete->fetch();
        $requete->closeCursor();

        return $nbre[0];
    }
}
