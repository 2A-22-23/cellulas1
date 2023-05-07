<?php
class Terre
{
    private ?string $id_terre = null;
    private ?float $largeur = null;
    private ?float $longeur = null;
    private ?string $agricole = null;
    private ?DateTime $labo = null;

    public function __construct($id = null, $l, $du, $nb, $d)
    {
        $this->id_terre = $id;
        $this->largeur = $l;
        $this->longeur = $du;
        $this->agricole = $nb;
        $this->labo = $d;
    }

    /**
     * Get the value of id_terre
     */
    public function getid_terre()
    {
        return $this->id_terre;
    }

    /**
     * Get the value of largeur
     */
    public function getlargeur()
    {
        return $this->largeur;
    }

    /**
     * Set the value of largeur
     *
     * @return  self
     */
    public function setlargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get the value of longeur
     */
    public function getlongeur()
    {
        return $this->longeur;
    }

    /**
     * Set the value of longeur
     *
     * @return  self
     */
    public function setlongeur($longeur)
    {
        $this->longeur = $longeur;

        return $this;
    }

    /**
     * Get the value of agricole
     */
    public function getagricole()
    {
        return $this->agricole;
    }

    /**
     * Set the value of agricole
     *
     * @return  self
     */
    public function setagricole($agricole)
    {
        $this->agricole = $agricole;

        return $this;
    }

    /**
     * Get the value of labo
     */
    public function getlabo()
    {
        return $this->labo;
    }

    /**
     * Set the value of labo
     *
     * @return  self
     */
    public function setlabo($labo)
    {
        $this->labo = $labo;

        return $this;
    }
}
?>