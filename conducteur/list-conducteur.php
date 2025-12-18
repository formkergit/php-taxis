<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php'; 

$vehiculeArray = listerConducteurs($pdo);

include PATH_PROJET . '/views/driver/list-conducteur-view.php' ;