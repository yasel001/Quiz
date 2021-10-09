<?php
//EL FILALI Yassine 2IG

class Utilisateur   //Classe utilisateur
{
    private $id;
    private $loginUser;
    private $passwd;
    private $resulat;

    public function __construct($loginUser, $passwd)    //Constructeur
    {
        $this->loginUser = $loginUser;
        $this->passwd = $passwd;
    }

    public function __get($att) //Getter
    {
        return $this->$att;
    }

    public function __set($att, $value) //Setter
    {
        $this->$att = $value;
    }
}
