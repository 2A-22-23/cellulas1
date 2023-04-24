<?PHP
include "../Controller/DiagnostiqueC.php";


$diagnostiqueC=new DiagnostiqueC();
if (isset($_GET["id"])){
	$diagnostiqueC->deleteDiagnostique($_GET["id"]);
	header('Location: MesDiagnostique.php');
}

?>