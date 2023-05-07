<?php
include '../Controller/DiagnostiqueC.php';
$diagnostiqueC = new DiagnostiqueC();
$diagnostiqueC->deleteDiagnostique($_GET["id_diag"]);
header('Location:ListDiagnostique.php');
?>