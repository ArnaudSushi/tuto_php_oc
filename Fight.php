<?php

include_once "./Personnage.php";
include_once "./PersonnageManager.php";

$perso = new Personnage([
    'nom' => 'Victor',
    'forcePerso' => 5,
    'degats' => 0,
    'niveau' => 1,
    'experience' => 0
]);
$db = new PDO('mysql:host=localhost;port=3308;dbname=oc_tuto', 'root', '');

$manager = new PersonnageManager($db);
$manager->add($perso);
