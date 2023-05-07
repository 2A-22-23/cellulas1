<?PHP
include "../Controller/TerreC.php";
include "../Controller/DiagnostiqueC.php";


$terreC=new TerreC();
$diagnostiqueC=new DiagnostiqueC();

if (isset($_POST["id"])){
	$diagnostiqueC->supprimerDiagparTerre($_POST["id"]);
	$terreC->supprimerTerre($_POST["id"]);
	header('Location: AfficherTerre.php');
}

?>