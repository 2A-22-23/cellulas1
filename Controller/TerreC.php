<?php
require_once '../config.php';

class TerreC
{
    function showTerre($agricole)
    {
        $sql = "SELECT * FROM terre WHERE label LIKE '%" . $agricole . "%'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $terre = $query->fetchAll();
            return $terre;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function rechercherTerre($str){
        $sql="select * from terre where nom like '%".$str."%' or largeur like '%".$str."%' or longeur like '%".$str."%'or echantillon like '%".$str."%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function upcomingTerre()
    {
        echo date("Y/m/d");
        $sql = "SELECT * FROM terre WHERE labo >= '" . date("Y-m-d") . "'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $terre = $query->fetchAll();
            return $terre;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function listTerre()
    {
        $sql = "SELECT * FROM terre";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    



    public function afficherTerreWithID($id){
        $sql="SELECT * From terre where id=$id";
        $db=config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    }

    public function addTerre($terre){
        $sql="insert into terre(nom,largeur,longeur,echantillon) values(:nom,:largeur,:longeur,:echantillon)";
        $db=config::getConnexion();
        try{
        $req=$db->prepare($sql);
            $nom=$terre->getNom();
            $largeur=$terre->getLargeur();
            $longeur=$terre->getLongeur();
            $echantillon=$terre->getEchantillon();
            $req->bindValue(':nom',$nom);
            $req->bindValue(':largeur',$largeur);
            $req->bindValue(':longeur',$longeur);
            $req->bindValue(':echantillon',$echantillon);
    
        $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
        
    }

    public function supprimerTerre($id){
        $sql="DELETE FROM terre where id=:id";
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

    function modifierTerre($terre,$id){
        $sql="UPDATE terre SET nom=:nom,largeur=:largeur,longeur=:longeur,echantillon=:echantillon  WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->sProduittribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $nom=$terre->getNom();
        $largeur=$terre->getLargeur();
        $longeur=$terre->getLongeur();
        $echantillon=$terre->getEchantillon();
        $req->bindValue(':nom',$nom);
        $req->bindValue(':largeur',$largeur);
        $req->bindValue(':longeur',$longeur);
        $req->bindValue(':echantillon',$echantillon);
        $req->bindValue(':id',$id);
    
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
        
    }

    
    
    


    
    function bookTerre($id_terre, $labo)
    {
        $sql = "INSERT INTO reservation  
        VALUES (NULL, :labo,:id_terre)";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'labo' => $labo,
                'id_terre' => $id_terre
            ]);
            $terre = $this->getTerre($id_terre);
            echo $terre['agricole'] - 1;
            $query = $db->prepare(
                'UPDATE terre SET agricole = ' . $terre['agricole'] - 1
                    . ' WHERE id_terre= ' . $id_terre
            );
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function getTerre($id)
    {
        $sql = "SELECT * from terre where id_terre = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $terre= $query->fetch();
            return $terre;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
