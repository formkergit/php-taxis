<?php 
include 'fonctions.php';
require 'connexiondb.php'; 

$titleTaxis = "Page d'acceuil des taxis";
require PATH_PROJET . '/views/partials/header.php';
?>

<p>Nombre de vehcicule : <?= getNbLigneTable($pdo,'vehicule') ?></p>
<p>Nombre de conducteurs : <?= getNbLigneTable($pdo,'conducteur') ?></p>

<?php require PATH_PROJET . '/views/partials/footer.php';  ?>