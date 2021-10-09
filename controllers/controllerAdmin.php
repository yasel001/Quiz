<?php
//EL FILALI Yassine 2IG

function ecranListeQuestion()   //Controleur de question
{
    try {
        if ($_SESSION['typeUser'] == "admin") {
            $questionManager = new QuestionManager();

            //On recupere toute les questions
            $listeQuestion = $questionManager->getAllQuestion($_SESSION['themeName']);

            require 'views\admin\question\vueAccueilQuestion.php';
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranAddQuestion() //Controleur d'ajout de question
{
    try {
        if ($_SESSION['typeUser'] == "admin") {
            $themeManager = new ThemeManager();

            if (!empty($_POST["add_question"])) {  //Verification
                if (!empty($_POST['question'])) {
                    if (!empty($_POST['r1']) && !empty($_POST['r2']) && !empty($_POST['r3']) && !empty($_POST['r4'])) {
                        if (!empty($_POST['rCorrecte'])) {
                            if ($_POST['rCorrecte'] > 0 || $_POST['rCorrecte'] < 5) {

                                //Instancier une nouvelle question
                                $question = new Question(securisation($_POST['question']), securisation($_POST['r1']), securisation($_POST['r2']), securisation($_POST['r3']), securisation($_POST['r4']), securisation($_POST['rCorrecte']));

                                //Dans quel theme se met la question ?
                                if ($_SESSION['themeName'] == 0) {
                                    $question->theme = securisation($_POST['themeNameAdd']);
                                } else {
                                    $question->theme = $_SESSION['themeName'];
                                }
                                $questionManager = new QuestionManager();

                                //Insertion de la question
                                $questionInserted = $questionManager->insertQuestion($question);
                                if (!empty($questionInserted)) {    // Si insertion s'est bien passé on revient a l'accueil question
                                    $url = 'index.php?action=accQuest';
                                    header('Location:' . $url);
                                }
                            } else {
                                $msgErrorRepCorrecte = "Veuillez entre un numero compris entre 1 et 4 ==> [1,2,3,4]";
                            }
                        } else {
                            $msgErrorRepCorrecte = "Le numero de la reponse correcte n'a pas été saisi";
                        }
                    } else {
                        $msgErrorReponse = "L'une des reponses n'a pas été saisi";
                    }
                } else {
                    $msgErrorQuestion = "Question non saisie";
                }
            }
            $ligneTheme = $themeManager->getAllTheme();

            require 'views\admin\question\vueAdd.php';
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranEditQuestion()    // Controleur de modification question
{
    try {
        if ($_SESSION['typeUser'] == "admin") {

            $questionManager = new QuestionManager();
            $themeManager = new ThemeManager();

            if (!empty($_POST["save_question"])) {     //Verification
                if (!empty($_POST['question'])) {
                    if (!empty($_POST['r1']) && !empty($_POST['r2']) && !empty($_POST['r3']) && !empty($_POST['r4'])) {
                        if (!empty($_POST['rCorrecte'])) {
                            if ($_POST['rCorrecte'] > 0 || $_POST['rCorrecte'] < 5) {

                                //Instanciation question
                                $question = new Question(securisation($_POST['question']), securisation($_POST['r1']), securisation($_POST['r2']), securisation($_POST['r3']), securisation($_POST['r4']), securisation($_POST['rCorrecte']));
                                $question->num_quest = $_GET['id'];
                                $question->theme = $_POST['themeNameEdit'];

                                //Modification question
                                $questionEdited = $questionManager->updateQuestion($question);
                                if ($questionEdited) {   // Redirection si la modif s'est bien passé
                                    $url = 'index.php?action=accQuest';
                                    header('Location:' . $url);
                                }
                            } else {
                                $msgErrorRepCorrecte = "Veuillez entre un nombre compris entre 1 et 4 ==> [1,2,3,4]";
                            }
                        } else {
                            $msgErrorRepCorrecte = "Le numero de la reponse correcte n'a pas été saisi";
                        }
                    } else {
                        $msgErrorReponse = "Une des quatres propositions n'a pas été saisie";
                    }
                } else {
                    $msgErrorQuestion = "Question non saisie";
                }
            }
            $rowToEdit = $questionManager->getARowbyID($_GET['id']);
            $ligneTheme = $themeManager->getAllTheme();

            require 'views\admin\question\vueEdit.php';
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranDeleteQuestion()  // Controleur suppression question
{
    try {
        if ($_SESSION['typeUser'] == "admin") {

            $questionManager = new QuestionManager();

            if (!empty($_POST["deleteok"])) {
                if ($_POST['choix'] == 'oui') { //Confirmatiqon de la suppression
                    $questionManager->deleteQuestion($_GET['id']);
                }
                $url = 'index.php?action=accQuest';
                header('Location:' . $url);
            }

            $rowToDelete = $questionManager->getARowbyID($_GET['id']);
            require 'views\admin\question\vueDelete.php';
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranListeTheme()  //Controlleur liste de theme
{
    try {
        if ($_SESSION['typeUser'] == "admin") {
            $themeManager = new ThemeManager();

            //Recuperer liste des themes
            $listeTheme = $themeManager->getAllTheme();

            require 'views\admin\theme\vueAccueilTheme.php';
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranAddTheme()    // Controleur ajout theme
{
    try {
        if ($_SESSION['typeUser'] == "admin") {
            if (!empty($_POST["add_theme"])) {  //Verification
                if (!empty($_POST['theme'])) {
                    $themeManager = new ThemeManager();
                    $theme = new Theme(securisation($_POST['theme']));

                    if ($themeManager->themeExist($theme) == 0) {   //Verifier que le theme n'existe pas

                        $themeInserted = $themeManager->insertTheme($theme);
                        if (!empty($themeInserted)) {    // Si insertion du theme s'est bien passé on revient a l'accueil theme
                            $url = 'index.php?action=accTheme';
                            header('Location:' . $url);
                        }
                    } else {
                        $msgErrorTheme = 'Ce theme existe déja';
                    }
                } else {
                    $msgErrorTheme = 'Veuillez completer ce champ';
                }
            }

            require 'views\admin\theme\vueAdd.php';
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranEditTheme()   // Controleur de modification theme
{
    try {
        if ($_SESSION['typeUser'] == "admin") {

            $themeManager = new ThemeManager();
            if (!empty($_POST["save_theme"])) {     //Verification
                if (!empty($_POST['theme'])) {
                    $theme = new Theme(securisation($_POST['theme']));
                    if (($themeManager->themeExist($theme) == 0)) { //Verifie que le theme n'existe pas

                        $theme->theme = $_GET['id'];

                        $themeEdited = $themeManager->updateTheme($theme);
                        if ($themeEdited) {   // Modif effectuee avec succes, redirection a l'ecran d'acueil theme
                            $url = 'index.php?action=accTheme';
                            header('Location:' . $url);
                        }
                    } else {
                        $msgErrorTheme = "Ce theme existe déja";
                    }
                } else {
                    $msgErrorTheme = "Theme non saisie";
                }
            }

            $rowThemeEdit = $themeManager->getThemebyID($_GET['id']);   //Recuperer info theme

            require 'views\admin\theme\vueEdit.php';
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}


function ecranDeleteTheme() // Controleur suppression theme
{
    try {
        if ($_SESSION['typeUser'] == "admin") {

            $themeManager = new ThemeManager();

            if (!empty($_POST["deleteok"])) {   //Verifier que l'on veut bien supprimer le theme
                if ($_POST['choix'] == 'oui') {
                    //Suppression theme
                    $themeManager->deleteTheme($_GET['id']);
                }
                $url = 'index.php?action=accTheme';
                header('Location:' . $url);
            }

            $rowToDelete = $themeManager->getThemebyID($_GET['id']);
            require 'views\admin\theme\vueDelete.php';
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranGererUser()   //Controleur gestion utilisateur par admin
{
    try {
        if ($_SESSION['typeUser'] == 'admin') {
            $userManager = new UtilisateurManager();

            $listeUsers = $userManager->getAllUserByScore();

            require 'views\admin\users\vueAccueilUsers.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranDeleteUser()  //Controlleur delete user par admin
{
    try {
        if ($_SESSION['typeUser'] == "admin") {

            $userManager = new UtilisateurManager();

            if (!empty($_POST["deleteok"])) {   //Controler que l'on veut bien supprimer l'user
                if ($_POST['choix'] == 'oui') {
                    $userManager->deleteUser($_GET['id']);
                }
                $url = 'index.php?action=accGererUser';
                header('Location:' . $url);
            }

            $rowToDelete = $userManager->getUserByID($_GET['id']);
            require 'views\admin\users\vueDelete.php';
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranDeleteAllUser()   //Controlleur permet de supprimer les utilisateur qui ne se sont jamais connecté
{
    try {
        if ($_SESSION['typeUser'] == "admin") {

            $userManager = new UtilisateurManager();

            if (!empty($_POST["deleteok"])) {
                if ($_POST['choix'] == 'oui') { //Controller que l'on veut bien supprimer
                    $userManager->deleteAllUser();
                }
                $url = 'index.php?action=accGererUser';
                header('Location:' . $url);
            }

            require 'views\admin\users\vueDeleteAllUser.php';
        } else {
            $msgError = 'Vous n\'avez pas acces a cette page';

            require 'views\vueErrorConnexion.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranThemeJouer()  //Controleur permettant de choisir le theme a joue
{
    try {
        $themeManager = new ThemeManager();

        if (!empty($_POST['bouton'])) {
            $_SESSION['themeName'] = $_POST['themeName'];   //Stocker le theme dans la session
            if ($_SESSION['typeUser'] == 'admin') {
                $url = 'index.php?action=accQuest';
            } else if ($_SESSION['typeUser'] == 'user') {
                $url = 'index.php?action=jouer';
            }
            header('Location:' . $url);
        }
        $ligneTheme = $themeManager->getAllTheme(); //Recuperer liste theme

        require 'views\adm_jou\vueChoixTheme.php';
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}
