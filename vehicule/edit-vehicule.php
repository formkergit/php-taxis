<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php'; 

$idEditVehicule = $_GET['id'] ?? null;

if (! is_numeric($idEditVehicule)  ) {
    dd("Cette conference n'existe pas !!!");
}

$vehicule = getVehicule($pdo,$idEditVehicule);
dg($vehicule);