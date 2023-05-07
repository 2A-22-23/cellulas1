<?php
class Diagnostique
{
    private ?int $id_diag = null;
    private ?string $id_client = null;
    private ?string $id_terre = null;
    private ?DateTime $date_diag = null;

    public function __construct($id=NULL , $n, $p, $d)
    {
        $this->id_diag = $id;
        $this->id_client = $n;
        $this->id_terre = $p;
        $this->date_diag = $d;
    }
    /**
     * Get the value of id_diag
     */
    public function getid_diag()
    {
        return $this->id_diag;
    }
    /**
     * Get the value of id_client
     */
    public function getid_client()
    {
        return $this->id_client;
    }

    /**
     * Set the value of id_client
     *
     * @return  self
     */
    public function setid_client($id_client)
    {
        $this->id_client = $id_client;

        return $this;
    }

    /**
     * Get the value of id_terre
     */
    public function getid_terre()
    {
        return $this->id_terre;
    }

    /**
     * Set the value of id_terre
     *
     * @return  self
     */
    public function setid_terre($id_terre)
    {
        $this->id_terre = $id_terre;

        return $this;
    }

    


    /**
     * Get the value of date_diag
     */
    public function getDob()
    {
        return $this->date_diag;
    }

    /**
     * Set the value of date_diag
     *
     * @return  self
     */
    public function setDob($date_diag)
    {
        $this->date_diag = $date_diag;

        return $this;
    }
}