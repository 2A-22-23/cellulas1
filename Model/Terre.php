<?php
class Terre
{
    private $id ;
    private $nom ;
    private $largeur ;
    private $longeur ;
    private $echantillon;

    public function __construct( $nom,$largeur, $longeur, $echantillon)
    {
        $this->nom = $nom;
        $this->largeur = $largeur;
        $this->longeur = $longeur;
        $this->echantillon = $echantillon;
    }

    function getId(){
        return $this->id;
    }
    function getNom(){
        return $this->nom;
    }
    function setNom($nom){
        $this->nom=$nom;
    }
    function getLargeur(){
        return $this->largeur;
    }
    function setLargeur($largeur){
        $this->largeur=$largeur;
    }
    function getLongeur(){
        return $this->longeur;
    }
    function setLongeur($longeur){
        $this->longeur=$longeur;
    }
    function getEchantillon(){
        return $this->echantillon;
    }
    function setEchantillon($echantillon){
        $this->echantillon=$echantillon;
    }


}
?>