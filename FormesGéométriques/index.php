<?php

include_once 'FormeGeometrique.php';
include_once 'CalculateurAire.php';

$tabFormes = [
    "cercle" => new Cercle(2),
    "triangle" => new Triangle(2, 1, 3),
    "rectangle" => new Rectangle(3, 3),
];

$calculateur = new CalculateurAire();

$aireTotale = $calculateur->calculerAireTotale($tabFormes);
echo "La somme des aires est $aireTotale\n";
