<?php
//EL FILALI Yassine 2IG

function ecranDemarrerQuiz()    //Controlleur de quiz
{
    try {
        if ($_SESSION['typeUser'] == "user") {
            $quizManager = new QuizManager();
            $questionManager = new QuestionManager();
            $userManager = new UtilisateurManager();

            //Controle pour fixer la limite de question
            if ($_SESSION['themeName'] == 0 || $questionManager->countQuestionBytheme($_SESSION['themeName']) > 9) {
                $maxQuest = 10;
            } else {
                $maxQuest = $questionManager->countQuestionBytheme($_SESSION['themeName']);
            }

            //Initialisation des variables
            $quizManager->initialisation();

            if ($_SESSION["numero_question"] > $maxQuest) { //Affichage du score(fin quiz)
                //Modification du score
                $userManager->updateScore($_SESSION['score'], $_SESSION['login']);

                $tableauPartie = $quizManager->resumeQuiz();    //Recuperer toute les questions de la partie

                require 'views\joueur\quiz\vueFinQuiz.php';

                unset($_SESSION['score']);
                unset($_SESSION['numero_question']);
                unset($_SESSION["ok"]);
                unset($_SESSION["numero_tire"]);
                unset($_SESSION["reponseUser"]);
            } else { //Affichage question (Quiz en cours)
                $infoQuestion = $questionManager->getARowbyID($quizManager->tirageQuest()); //Recuperer ligne de question
                require 'views\joueur\quiz\vueQuestion.php';
            }
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranTapePasswordForModify()   //Controleur d'encodage de mot de passe pour pouvoir modifier son profil
{
    try {
        if ($_SESSION['typeUser'] == 'user') {
            if (!empty($_POST['entrerPass'])) {
                if (!empty($_POST['mdp'])) {
                    $userManager = new UtilisateurManager();
                    $recupPass = $userManager->getIdPwdUser($_SESSION['login']);    //Recuperer mot de passe
                    $motDePasseUser =  $recupPass[0][1];
                    if (password_verify($_POST['mdp'], $motDePasseUser)) {  //Verifier que les mdp concordent
                        $url = 'index.php?action=accModUser';
                        header('Location:' . $url);
                    } else {
                        $msgErrorPass = "Mot de passe incorrect";
                    }
                } else {
                    $msgErrorPass = "Veuillez renseigner ce champ";
                }
            }
            require 'views\joueur\compte\vueEncoderPass.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranUserModify()  //Controleur choix de la modification
{
    if ($_SESSION['typeUser'] == 'user') {
        require 'views\joueur\compte\vueEditUser.php';
    }
}

function ecranEditLog() //Controleur modif login user
{
    try {
        if ($_SESSION['typeUser'] == 'user') {
            if (!empty($_POST["save_log"])) {
                if (!empty($_POST['login'])) {
                    if ($_POST['login'] != $_SESSION['login']) {
                        $userManager = new UtilisateurManager();
                        if ($userManager->userExist($_POST['login']) == 0) {    //On verifie que le login n'existe pas deja
                            //modification login de l'utilisateur
                            $resultMod = $userManager->userModLogin($_SESSION['login'], securisation($_POST['login']));
                            if (!empty($resultMod)) {   //Si la modification est effectuée avec succes
                                header('location:index.php');
                            }
                        } else {
                            $msgErrorLogin = "Le login saisi existe déja";
                        }
                    } else {
                        $msgErrorLogin = "Vous ne souhaitez pas modifier votre login ? Retourner à l'écran précédent";
                    }
                } else {
                    $msgErrorLogin = "Veuillez compléter ce champ ou quitter cet écran";
                }
            }
            require 'views\joueur\compte\vueEditLogin.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranEditPass()    //Controleur editeur Mot de passe
{
    try {
        if ($_SESSION['typeUser'] == 'user') {
            if (!empty($_POST["save_pass"])) {
                if (!empty($_POST['pass'])) {
                    if (!empty($_POST['pass2'])) {
                        if ($_POST['pass'] == $_POST['pass2']) {
                            if (strlen($_POST['pass']) > 7) {

                                $user = new Utilisateur($_SESSION['login'], password_hash($_POST['pass'], PASSWORD_DEFAULT));
                                $userManager = new UtilisateurManager();
                                $resultMod = $userManager->userModPass($user);  //Modification du mot de passe
                                if (!empty($resultMod)) {   //Si la modif a reussi
                                    header('location:index.php');
                                }
                            } else {
                                $msgErrorPass = "Minimum 8 caracteres";
                            }
                        } else {
                            $msgErrorPass2 = "Les mots de passe ne correspondent pas";
                        }
                    } else {
                        $msgErrorPass2 = "Mot de passe de verification non saisi";
                    }
                } else {
                    $msgErrorPass = "Mot de passe non saisi";
                }
            }
            require 'views\joueur\compte\vueEditPass.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}
