<?php
require_once '../config.php';

class DiagnostiqueC
{
    public function listDiagnostique()
    {
        $sql = "SELECT * FROM Diagnostique";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteDiagnostique($id)
    {
        $sql = "DELETE FROM diagnostique WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function afficherDiagWithID($id){
        $sql="SELECT * From diagnostique where id=$id";
        $db=config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }


    public function afficherUserName($id){
        $sql="SELECT * From client where id_client=$id";
        $db=config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }


    public function addDiagnostique($diagnostique){
        $sql="insert into diagnostique(id_client,id_terre,date_diag,status,description) values(:id_client,:id_terre,:date_diag,:status,:description)";
        $db=config::getConnexion();
        try{
        $req=$db->prepare($sql);
            $id_client=$diagnostique->getIdClient();
            $id_terre=$diagnostique->getIdTerre();
            $date_diag=$diagnostique->getDateDiag();
            $status=$diagnostique->getStatus();
            $description=$diagnostique->getDescription();
            //$date = date('d-m-y h:i:s')
            $req->bindValue(':id_client',$id_client);
            $req->bindValue(':id_terre',$id_terre);
            $req->bindValue(':date_diag',$date_diag);
            $req->bindValue(':status',$status);
            $req->bindValue(':description',$description);
    
        $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
        
    }
    public function updateDiagnostique($diagnostique, $id){
        $sql="UPDATE diagnostique SET id_terre=:id_terre,date_diag=:date_diag,status=:status,description=:description  WHERE id=:id";

        $db=config::getConnexion();
        try{
        $req=$db->prepare($sql);
            $id_client=$diagnostique->getIdClient();
            $id_terre=$diagnostique->getIdTerre();
            $date_diag=$diagnostique->getDateDiag();
            $status=$diagnostique->getStatus();
            $description=$diagnostique->getDescription();
            //$date = date('d-m-y h:i:s')
            $req->bindValue(':id',$id);
            $req->bindValue(':id_terre',$id_terre);
            $req->bindValue(':date_diag',$date_diag);
            $req->bindValue(':status',$status);
            $req->bindValue(':description',$description);
    
        $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
        
    }
    

    function approuver($id)
    {
    $sql="UPDATE diagnostique SET status='Approuvé' WHERE id=:id";
    $db = config::getConnexion();
    try
        {
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        $req->execute();
        }
    catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function refuse($id)
    {
        $sql="UPDATE diagnostique SET status='Refusé' WHERE id=:id";
        $db = config::getConnexion();
        try
            {
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->execute();
            }
        catch (Exception $e)
            {
                echo 'Erreur: '.$e->getMessage();
            }
    }
    
    function recupererDiagByTerre($id_Terre){
        $sql="SELECT * from Diagnostique where id_terre='$id_Terre'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    
    public function showDiagnostiqueApprouve($id){
        $sql="SELECT * From Diagnostique where id_terre=$id and status='Approuvé'";
        $db=config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }


    public function showDiagnostique($id){
        $sql="SELECT * From Diagnostique where id_terre=$id";
        $db=config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }
    public function MyDiagnostique($id){
        $sql="SELECT * From Diagnostique where id_client=$id";
        $db=config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }
    
    function supprimerDiagparTerre($id)
    {
        $sql = "DELETE FROM diagnostique WHERE id_terre = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

}
