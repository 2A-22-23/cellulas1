<?php

//fetch_data.php
include  "../Controller/CategorieC.php";

$catC= new CategorieC();

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM produit WHERE TRUE
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND prix BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["categorie"]))
	{
		$category_filter = implode("','", $_POST["categorie"]);
		$query .= "
		 AND id_categorie IN('".$category_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$resultaa = $catC->afficherCategorieWithID($row["id_categorie"]);
			foreach($resultaa as $row2){			
			
			

			$output .= '
			<div class="col-lg-3 col-sm-6 col-12">
                                <div class="collection-items">
                                    <div class="collection-img">
                                        <div class="collection-overlay"></div>
                                        <img src="../Admin/'. $row['image'] .'" alt="collection-img-1" />
                                        <ul class="collection-icon">
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                                            <li><a href="../Admin/'. $row['image'] .'" data-rel="lightcase:myCollection"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- .collection-img -->
                                    <div class="collection-content">
                                        <h4><a href="AfficherProd.php?id='. $row['id'] .'">Nom : '. $row['nom'] .'</a></h4>
                                        <h5>Prix : '. $row['prix'] .' TND</h5>
                                        <h5>Categorie '.$row2['nom'].'</h5>
                                        <h6>Info : '. $row['informations'] .'</h6>
                                    </div>
                                    <!-- .collection-content -->
                                </div>
                                <!-- .collection-items -->
           </div>';
		}
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>