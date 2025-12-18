<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php'; 

$idSuppconducteur = $_GET['id'] ?? null;

if (! is_numeric($idSuppconducteur)  ) {
    dd("Cette conference n'existe pas !!!");
}

$suppResultconducteur =supprimerConducteur($pdo,$idSuppconducteur);

if ($suppResultconducteur) {
    header("Location: " . WEB_ROOT . "/conducteur/list-conducteur.php");
    exit;
}