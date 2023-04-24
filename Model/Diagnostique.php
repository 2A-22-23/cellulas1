<?php
class Diagnostique
{
    private $id ;
    private $id_client ;
    private $id_terre;
    private $date_diag ;
    private $status ;
    private $description ;

    public function __construct( $id_client, $id_terre, $date_diag, $status, $description)
    {
        $this->id_diag = $id;
        $this->id_client = $id_client;
        $this->id_terre = $id_terre;
        $this->date_diag = $date_diag;
        $this->status = $status;
        $this->description = $description;
    }

    function getId(){
        return $this->id;
    }
    function getIdClient(){
        return $this->id_client;
    }
    function setIdClient($id_client){
        $this->id_client=$id_client;
    }
    function getIdTerre(){
        return $this->id_terre;
    }
    function setIdTerre($id_terre){
        $this->id_terre=$id_terre;
    }
    function getDateDiag(){
        return $this->date_diag;
    }
    function setDateDiag($date_diag){
        $this->date_diag=$date_diag;
    }
    function getStatus(){
        return $this->status;
    }
    function setStatus($status){
        $this->status=$status;
    }
    function getDescription(){
        return $this->description;
    }
    function setDescription($description){
        $this->description=$description;
    }


}

?>