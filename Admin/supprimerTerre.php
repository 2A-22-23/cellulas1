<?PHP
include "../Controller/TerreC.php";


$terreC=new TerreC();
if (isset($_POST["id"])){
	$terreC->supprimerTerre($_POST["id"]);
	header('Location: AfficherTerre.php');
}

?>