<?PHP
include  "../Controller/DiagnostiqueC.php";


$diagC=new DiagnostiqueC();
if (isset($_GET["id"])){

	$diagC->approuver($_GET["id"]);
	header('Location: AfficherDiagnostique.php');
}

?>