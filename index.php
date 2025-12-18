<?php 
include 'fonctions.php';
require 'connexiondb.php'; 
?>

<p>><a href="<?= WEB_ROOT . '/vehicule/list-vehicule.php' ?>">Lister les vehicules</a></p
<p>><a href="<?= WEB_ROOT . '/conducteur/list-conducteur.php' ?>">Lister les conducteurs</a></p


<p>Nombre de vehcicule : <?= getNbLigneTable($pdo,'vehicule') ?></p>
<p>Nombre de conducteurs : <?= getNbLigneTable($pdo,'conducteur') ?></p>