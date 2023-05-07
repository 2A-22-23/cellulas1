<?php
include '../config.php';
include '../Model/Terre.php';

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
