<?php
include '../Controller/TerreC.php';

$terreC = new TerreC();
$terreC->bookTerre($_GET["id_terre"], 1);
header('Location:upcomingTerre.php');
?>