<?php
include '../config.php';
include '../Model/Diagnostique.php';

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
        $sql = "DELETE FROM diagnostique WHERE id_diag = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addDiagnostique($diagnostique)
    {
        $sql = "INSERT INTO diagnostique  
        VALUES (NULL, :fn,:ln,:dob)";
        $db = config::getConnexion();
        try {
            print_r($diagnostique->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $diagnostique->getid_client(),
                'ln' => $diagnostique->getid_terre(),
               
                'dob' => $diagnostique->getDob()->format('Y/m/d')
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateDiagnostique($diagnostique, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Diagnostique SET 
                    id_client = :id_client, 
                    id_terre = :id_terre, 
                    date_diag = :date_diag
                WHERE id_diag= :id_diag'
            );
            $query->execute([
                'id_diag' => $id,
                'id_client' => $diagnostique->getid_client(),
                'id_terre' => $diagnostique->getid_terre(),
                
                'date_diag' => $diagnostique->getDob()->format('Y/m/d')
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showDiagnostique($id)
    {
        $sql = "SELECT * from Diagnostique where id_diag= $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $diagnostique = $query->fetch();
            return $diagnostique;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
        
    }
    
}
