<?php

include 'Vehicule.php';

$vehiculeVoiture = new Vehicule("Honda", "jkjd", 2005, 50.87);
$vehiculeMoto = new Vehicule("Toyota", "hifgg", 2014, 7584.5);
$vehiculeCamion = new Vehicule("Toyota", "kjdfjjfff", 2024, 758.2);

$vehiculeCamion->afficherInfos();
$vehiculeMoto->afficherInfos();
$vehiculeVoiture->afficherInfos();

$voiture = new Voiture(4, $vehiculeVoiture);
$moto = new Moto(54.2, $vehiculeMoto);
$camion = new Camion(8000, 780, $vehiculeCamion);

$voiture->afficherInfos();
$moto->afficherInfos();
$camion->afficherInfos();

$voiture->programmerEntretien("10/12/2024");
$voiture->programmerEntretien("5/12/2024");
$voiture->programmerEntretien("1/12/2024");

$camion->chargerPoids(1500);
$camion->chargerPoids(100000);