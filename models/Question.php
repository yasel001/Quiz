<?php
//EL FILALI Yassine 2IG

class Question      // Classe de question
{
    private $num_quest;
    private $question;
    private $r1;
    private $r2;
    private $r3;
    private $r4;
    private $reponse;
    private $theme;

    public function __construct($question, $r1, $r2, $r3, $r4, $reponse)    // Constructeur
    {
        $this->question = $question;
        $this->r1 = $r1;
        $this->r2 = $r2;
        $this->r3 = $r3;
        $this->r4 = $r4;
        $this->reponse = $reponse;
    }

    public function __get($att)     // Getter
    {
        return $this->$att;
    }

    public function __set($att, $val) // Setter
    {
        $this->$att = $val;
    }
}
