<?php
//EL FILALI Yassine 2IG

class UtilisateurManager
{
    public function userInsert(Utilisateur $user)  //Inserer l'utilisateur qui s'inscrit
    {     
            //Instancier
        $db = new DBManager();

            //Recuperation du ID du dernier element
        $lastID = $this->getLastThemeId();

            //Si id est nulle, on met l'id a 1
        if($lastID == null) $lastID = 1;

            //Recuperer infos utilisateur
        $log = $user->loginUser;
        $pass = $user->passwd;

            //Requete
        $requete = $db->getBdd()->prepare("INSERT INTO utilisateur ( id, loginUser, passwd, resultat, nb_essai, connection ) VALUES ( :id, :loginUser, :passwd, 0, 0, 0 )");

            //Lier variable
        $requete->bindParam(":id", $lastID);
        $requete->bindParam(":loginUser", $log);
        $requete->bindParam(":passwd", $pass);

            //Executeer requete
        $result = $requete->execute();

        return $result;
    }

    public function userExist(String $userLogin)  //Verifier si l'utilisateur existe
    {     
            //Instancier
        $db = new DBManager();

            //Requete
        $requete = $db->getBdd()->prepare("SELECT COUNT(*) FROM utilisateur WHERE loginUser = :loginu");

            //Lier
        $requete->bindParam(":loginu", $userLogin);

            //Executer instruction
        $requete->execute();

        $isExiste = $requete->fetch();
        $requete->closeCursor();

        return $isExiste[0];
    }

    public function getIdPwdUser(String $userLogin)   //Permet de recuperer l'id et le mot de passe (crypté) de l'utilisateur
    {      
            //Instancier
        $db = new DBManager();

            //Requete
        $requete = $db->getBdd()->prepare("SELECT id, passwd FROM utilisateur WHERE loginUser = :loginu");

            //Lier variable
        $requete->bindParam(":loginu", $userLogin);

            //Executer instruction
        $requete->execute();

        $IdAndMdpHash = $requete->fetchAll();
        $requete->closeCursor();

        return $IdAndMdpHash;
    }

    public function getAllUserByScore()    //Permet de selectionner les utilisateur par score
    {       
            //Instancier
        $db = new DBManager();

            //Instruction
        $requete = $db->getBdd()->prepare("SELECT id, loginUser, resultat, nb_essai FROM utilisateur WHERE id != 1 ORDER BY resultat DESC, nb_essai ASC");
        
            //Execution
        $requete->execute();

        $listeClassement = $requete->fetchAll();
        $requete->closeCursor();

        return $listeClassement;
    }

    public function updateScore(Float $score, String $log) //Met a jour le score et le nombre d'essai du joueur
    {     
            //On instancie 
        $db = new DBManager();

            //Recupere le nombre d'essai et le resultat du joueur
        $ancienResultatEtNbreEssai = $this->recupNombreEssaiEtResultat($log);
        $nouveauScore = $ancienResultatEtNbreEssai[0][0];

            //Calcul du nouveau score et nombre d'essai
        $nouvelEssai = $ancienResultatEtNbreEssai[0][1];
        $nouvelEssai += 1;

        $nouveauScore = (($nouveauScore + $score) / $nouvelEssai);

            //Requete de mise a jour score et nb_essai
        $requete = $db->getBdd()->prepare("UPDATE utilisateur SET resultat=:res, nb_essai=:essai WHERE loginUser=:user");

            //Lier variable
        $requete->bindParam(":res", $nouveauScore);
        $requete->bindParam(":essai", $nouvelEssai);
        $requete->bindParam(":user", $log);

            //Executer instruction
        $requete->execute();
    }

    public function recupNombreEssaiEtResultat(String $log)    //Permet de recuperer le resultat, nombre d'essai et connection du joueur
    {      
            //Instancier
        $db = new DBManager();

            //Requete
        $requete = $db->getBdd()->prepare("SELECT resultat, nb_essai, connection FROM utilisateur WHERE loginUser=:user");

            //Lier variable
        $requete->bindParam(":user", $log);

            //Executer instruction
        $requete->execute();

        $resultatNbEssaiRes = $requete->fetchall();
        $requete->closeCursor();

        return $resultatNbEssaiRes;
    }

    public function userModLogin(String $ancienLog, String $newLog){     //Permet de modifier son login a l'utilisateur
            //On instancie 
        $db = new DBManager();

            //Requete de mise a jour
        $requete = $db->getBdd()->prepare("UPDATE utilisateur SET loginUser=:newLog WHERE loginUser=:oldLog");

            //Lier variable
        $requete->bindParam(":oldLog", $ancienLog);
        $requete->bindParam(":newLog", $newLog);

            //Executer instruction
        $requete->execute();

    return $requete;
    }

    public function userModPass(Utilisateur $user){    //Permet a l'utilisateur de modifier son mdp
            //On instancie 
        $db = new DBManager();

            //Recuperer info user
        $mdp = $user->passwd;
        $log = $user->loginUser;

            //Requete de mise a jour
        $requete = $db->getBdd()->prepare("UPDATE utilisateur SET passwd=:newPass WHERE loginUser=:logi");

            //Lier variable
        $requete->bindParam(":logi", $log);
        $requete->bindParam(":newPass", $mdp);

            //Executer instruction
        $requete->execute();

    return $requete;
    }

    public function deleteUser(Int $uidUser)   //Suppression utilisateur
    {      
            //Instancier DB
        $db = new DBManager();

            //Requete 
        $req = $db->getBdd()->prepare("DELETE FROM utilisateur WHERE id=:id");

            //Lier variable
        $req->bindParam(":id", $uidUser);

            //Executer instruction
        $req->execute();
    }

    public function getUserByID(Int $uidUser)  // Renvoie les infos de l'utilisateur correspondant a l'id
    {      
            //Instancier
        $db = new DBManager();

            //Requete
        $requete = $db->getBdd()->prepare("SELECT * FROM utilisateur WHERE id = $uidUser");

            //Executer instruction
        $requete->execute();

        $resultat = $requete->fetch();
        $requete->closeCursor();

        return $resultat;
    }

    public function deleteAllUser(){   //Permet de supprimer tous les utilisateurs qui ne se sont jamais connecté
            //Instancier
        $db = new DBManager();

            //Requete
        $requete = $db->getBdd()->prepare("DELETE FROM utilisateur WHERE connection = 0");

            //Executer instruction
        $requete->execute();
    }

    public function updateConnection(String $log){    //Met a jour le nombre de connection de l'utilisateur
            //On instancie 
        $db = new DBManager();

            //Recupere l'ancien nombre de connexion
        $ancienConnexion = $this->recupNombreEssaiEtResultat($log);

            //Met a jour la connexion
        $nouvelConnexion = $ancienConnexion[0][2];
        $nouvelConnexion += 1;

            //Requete de mise a jour
        $requete = $db->getBdd()->prepare("UPDATE utilisateur SET connection=:con WHERE loginUser=:user");

            //Lier variable
        $requete->bindParam(":con", $nouvelConnexion);
        $requete->bindParam(":user", $log);

            //Execution de la requete
        $requete->execute();
    }

    private function getLastThemeId()   //Permet de recuperer le dernier ID de la base de donnee de la table utilisateur
    {       
            //Instancier
        $db = new DBManager();

            //Instruction qui retourne le premier id du trou
        $req = $db->getBdd()->prepare("SELECT MIN(id+1) FROM utilisateur WHERE (id+1) NOT IN (SELECT id FROM utilisateur)");

            //Execution instruction
        $req->execute();

        $resultLast = $req->fetch();
        $req->closeCursor();

        return $resultLast[0];
    }
}
