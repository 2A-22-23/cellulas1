<?PHP
include "../Controller/CategorieC.php";
include "../Controller/ProduitC.php";
$prodC=new ProduitC();


$catC=new CategorieC();
if (isset($_POST["id"])){
	$prodC->supprimerProduitParCategory($_POST["id"]);
	$catC->supprimerCategorie($_POST["id"]);
	header('Location: AfficherCategories.php');
}

?>