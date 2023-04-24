<?PHP
include "../Controller/DiagnostiqueC.php";


$diagnostiqueC=new DiagnostiqueC();
if (isset($_POST["id"])){
	$diagnostiqueC->deleteDiagnostique($_POST["id"]);
	header('Location: AfficherDiagnostique.php');
}

?>