<?php
//EL FILALI Yassine 2IG

class Theme     //Classe theme
{
    private $theme;
    private $nom;

    public function __construct($nom)   //Constructeur
    {
        $this->nom = $nom;
    }

    public function __get($att) //Getter
    {
        return $this->$att;
    }

    public function __set($att, $value) //Setter
    {
        return $this->$att = $value;
    }
}
