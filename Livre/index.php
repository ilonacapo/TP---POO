<?php

include 'Livre.php';

$livre1 = new Livre("Allah n'est pas obligé", "Amhmadou Kourouma", 2000);
$livre2 = new Livre("Quand on refuse on dit non", "Ahmadou Kourouma", 2004);

$livre1->afficherDetails();
$livre2->afficherDetails();
echo "\n";

$livrePapier1 = new LivrePapier(200, $livre1);
$livreEbook = new Ebook("Kindle", $livre2);

$livrePapier1->afficherDetails();
$livreEbook->afficherDetails();
echo "\n";

$livrePapier1->emprunter();
$livrePapier1->emprunter();

$livreEbook->emprunter();
$livreEbook->emprunter();