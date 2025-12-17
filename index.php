<?php 
include 'fonctions.php';
require 'connexiondb.php'; 
?>

<a href="<?= WEB_ROOT . '/vehicule/list-vehicule.php' ?>">Lister les vehicules</a>


<p>Nombre de vehcicule : <?= getNbLigneTable($pdo,'vehicule') ?></p>
<p>Nombre de conducteurs : <?= getNbLigneTable($pdo,'conducteur') ?></p>