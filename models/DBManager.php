<?php
//EL FILALI Yassine 2IG

class DBManager
{
    private $serveur = "localhost";
    private $dbName = "quiz";
    private $user = "root";
    private $pass = "";                                     /*private $pass = "root";*/

    public function getBdd()
    {      // Connexion base de donnee
        $bdd = new PDO('mysql:host=' . $this->serveur . ';dbname=' . $this->dbName, $this->user, $this->pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    }
}
