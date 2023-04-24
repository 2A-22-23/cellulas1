<?php 
require_once "../config.php";
class CategorieC{

    public function afficher($Categorie){
        $id=$Categorie->getId();
        $nom=$Categorie->getNom();

}    
    
    function rechercherTicket($str){
        $sql="select * from Categorie where Nom like '%".$str."%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function afficherCategorieWithID($id){
        $sql="SELECT * From Categorie where id=$id";
        $db=config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }
    
public function afficherCategories(){
    $sql="SELECT * From Categorie";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}


    function recupererCategorie($id){
        $sql="SELECT * from Categorie where id=$id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierCategorie($Categorie,$id){
        $sql="UPDATE Categorie SET nom=:nom,date_modif=:date_modif WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->sCategorietribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $nom=$Categorie->getNom();
        $date_modif=$Categorie->getDateModif();
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':date_modif',$date_modif);
        
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
        
    }

public function ajouterCategorie($Categorie){
    $sql="insert into Categorie(nom,date_creation) values(:nom,:date_creation)";
    $db=config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $nom=$Categorie->getNom();
        $date_creation=$Categorie->getDateCreation();
        $req->bindValue(':nom',$nom);
        $req->bindValue(':date_creation',$date_creation);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
public function supprimerCategorie($id){
    $sql="DELETE FROM Categorie where id=:id";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
}
?>