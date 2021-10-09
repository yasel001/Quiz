<?php
//EL FILALI Yassine 2IG

function accueilEtranger()  //Controller accueil
{
    try {
        $db = new DBManager();
        $connectOk = $db->getBdd();  // Connection a la db
        require 'views\adm_jou\vuePrincipale.php';
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function inscription()
{
    try {
        $userManager = new UtilisateurManager();

        if (!empty($_POST["ins"])) {
            if (!empty($_POST['login'])) {
                $login = securisation($_POST['login']);

                if ($userManager->userExist($login) == 0) { //Verifier que le login n'existe pas 

                    $_SESSION['login'] = $login;

                    if (!empty($_POST['passwd']) && !empty($_POST['passwd2'])) {
                        if (($_POST['passwd'] == $_POST['passwd2'])) {
                            if (strlen($_POST['passwd']) > 7) {

                                $user = new Utilisateur($login, password_hash($_POST['passwd'], PASSWORD_DEFAULT)); //Hashage password
                                $resultInsert = $userManager->userInsert($user);    //Insertion utilisateur
                                if (!empty($resultInsert)) {
                                    header('location:index.php');   //Redirection si insertion bien passée
                                }
                            } else {
                                $msgErrorPassword = "Longueur minimal du mot de passe est de 8 caracteres et maximal 15 caracters";
                            }
                        } else {
                            $msgErrorPassword2 = "Mot de passe ne correspondent pas";
                        }
                    } else {
                        $msgErrorPassword = "Mot de passe non saisi";
                    }
                } else {
                    $msgErrorLogin = "Utilisateur déja existant";
                }
            } else {
                $msgErrorLogin = "Le login n'a pas été saisi";
            }
        }

        require 'views\adm_jou\vueInscription.php';
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function connection()   //Controleur de connexion
{
    try {
        $userManager = new UtilisateurManager();

        if (!empty($_POST['con'])) {
            if (!empty($_POST['login'])) {
                $login = securisation($_POST['login']);

                if ($userManager->userExist($login) == 1) { //Verifier que le login existe

                    $_SESSION['login'] = $login;

                    if (!empty($_POST['passwd'])) {

                        $recupererIdAndMdp = $userManager->getIdPwdUser($login);    //Recuperer id et mot de passe
                        $id = $recupererIdAndMdp[0][0];
                        $mdp = $recupererIdAndMdp[0][1];

                        if (password_verify($_POST['passwd'], $mdp)) {  //Verifier que le mot de passe est correct
                            if ($id == 1) {
                                $_SESSION['typeUser'] = "admin";
                            } else {
                                $_SESSION['typeUser'] = "user";
                            }
                            $userManager->updateConnection($_SESSION['login']); //Incrementer la connexion

                            $url = "index.php?action=typeUser";
                            header('Location:' . $url);
                        } else {
                            $msgErrorPassword = "Mot de passe incorrect";
                        }
                    } else {
                        $msgErrorPassword = "Champ mot de passe vide";
                    }
                } else {
                    $msgErrorLogin = $login . " n'existe pas dans la base de donnée";
                }
            } else {
                $msgErrorLogin = "Champ login vide";
            }
        }
        require 'views\adm_jou\vueConnexion.php';
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranAccueil() //Controleur apres s'etre connecté
{
    try {
        if ($_SESSION['typeUser'] == "admin") {
            require 'views\admin\vueAccueilAdmin.php';
        } else {
            $userManager = new UtilisateurManager();
            $nbEssai = $userManager->recupNombreEssaiEtResultat($_SESSION['login']);  //On recupere le nombre de partie jouer
    
            require 'views\joueur\vueAccueilJoueur.php';
        }
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}

function ecranClassement()  //Controlleur de classement
{
    try {
        $userManager = new UtilisateurManager();

        $listeScoreJoueur = $userManager->getAllUserByScore();  //Recuperer une liste des utilisateurs en fonction du score

        require 'views\adm_jou\vueClassement.php';
    } catch (Exception $e) {
        $msgError = $e->getMessage();
        require 'views\vueErrorConnexion.php';
    }
}
