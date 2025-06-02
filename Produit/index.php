<?php

include 'Produit.php';

$produit_1 = new Produit("Ordinateur", 899.99);
$produit_2 = new Produit("Clavier", 15.99);

$nom_1 = $produit_1->getNom();
$prix_1 = $produit_1->getPrix();

$nom_2 = $produit_2->getNom();
$prix_2 = $produit_2->getPrix();