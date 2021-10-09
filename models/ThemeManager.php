<?php
//EL FILALI Yassine 2IG

class ThemeManager{
    public function insertTheme(Theme $theme)  //Insertion du theme dans la base de donnee
    {
            //Instancier
        $db = new DBManager();

            //Recuperation du ID du dernier element
        $lastID = $this->getLastThemeId();

            //Si id est nulle, on met l'id a 1
        if($lastID == null) $lastID = 1;

            //On recupere le theme
        $thematique = $theme->nom;

            //Requete
        $req = $db->getBdd()->prepare("INSERT INTO theme ( theme, nom ) VALUES (:id, :thematique )");

            //Lier variable au ':'
        $req->bindParam(":id", $lastID);
        $req->bindParam(":thematique", $thematique);

            //Execution de la requete
        $insertAgree = $req->execute();

        return $insertAgree;
    }

    public function updateTheme(Theme $theme)   //Mise a jour de la question dans la db
    {      
            //Connexion DB
        $db = new DBManager();

            //On recupere info theme 
        $id = $theme->theme;
        $nomTheme = $theme->nom;

            //Mise a jour de la base de donnée
        $req = $db->getBdd()->prepare("UPDATE theme SET nom=:nom WHERE theme=:id");

            //Lier variable avec masque ':'
        $req->bindParam(":nom", $nomTheme);
        $req->bindParam(":id", $id);

            //Execution instruction
        $modifyOk = $req->execute();

        return $modifyOk;
    }

    private function getLastThemeId()   //Permet de recuperer le dernier ID de la base de donnee de la table theme
    {       
            //Instancier
        $db = new DBManager();

            //Instruction qui retourne le premier id du trou
        $req = $db->getBdd()->prepare("SELECT MIN(theme+1) FROM theme WHERE (theme+1) NOT IN (SELECT theme FROM theme)");

            //Execution instruction
        $req->execute();

        $resultLast = $req->fetch();
        $req->closeCursor();

        return $resultLast[0];
    }

    public function getAllTheme()  // Fonction recuperant tout les themes de la db
    {      
            //Instancier
        $db = new DBManager();

            //Requete
        $req = $db->getBdd()->prepare("SELECT * FROM theme ORDER BY theme ASC");

            //Execution de l'instruction
        $req->execute();

        $allTheme = $req->fetchAll();
        $req->closeCursor();

        return $allTheme;
    }

    public function getThemebyID(Int $uidTheme)    // Renvoie les infos du theme correspondant a l'id
    {      
            //Instancier
        $db = new DBManager();

            //Requete
        $requete = $db->getBdd()->prepare("SELECT * FROM theme WHERE theme = $uidTheme");

            //Execution de la requete
        $requete->execute();

        $resultat = $requete->fetch();
        $requete->closeCursor();

        return $resultat;
    }

    public function deleteTheme(Int $uidTheme) //Suppression theme
    {      
            //Instancier DB
        $db = new DBManager();

            //Requete => Suppression des questions liés au theme
        $req = $db->getBdd()->prepare("DELETE FROM quiz WHERE theme=:id");

            //Lier variable
        $req->bindParam(":id", $uidTheme);

            //Execution instruction
        $req->execute();

            //Requete => Suppression du theme en question
        $req = $db->getBdd()->prepare("DELETE FROM theme WHERE theme=:id");

            //Lier variable
        $req->bindParam(":id", $uidTheme);

            //Execution instruction
        $req->execute();
    }

    public function themeExist(Theme $thematique)  //Verifier si le theme existe
    {     
            //Instancier
        $db = new DBManager();

            //Recuperer info theme
        $theme = $thematique->nom;

            //Instruction
        $requete = $db->getBdd()->prepare("SELECT COUNT(*) FROM theme WHERE nom = :themeNom");

            //Lier variable
        $requete->bindParam(":themeNom", $theme);

            //Execution instruction
        $requete->execute();

        $isExiste = $requete->fetch();
        $requete->closeCursor();

        return $isExiste[0];
    }
}