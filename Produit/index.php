<?php

include 'Produit.php';

$produit_1 = new Produit("Ordinateur", 899.99);
$produit_2 = new Produit("Clavier", 15.99);

$nom_1 = $produit_1->getNom();
$prix_1 = $produit_1->getPrix();

$nom_2 = $produit_2->getNom();
$prix_2 = $produit_2->getPrix();

$panier = [];
array_push($panier, $produit_1);
array_push($panier, $produit_2);

foreach ($panier as $produit) {
    $nom = $produit->getNom();
    $prix = $produit->getPrix();
    echo "Nom: $nom, Prix: $prix\n";
}
$prixTotal = 0;

foreach ($panier as $produit) {
    $prix = $produit->getPrix();
    $prixTotal += $prix;
}

echo "Prix Total: $prixTotal\n";

$panier = $produit_1->ajouterAuPanier($panier, 5);
$qty_1 = $produit_1->showQuantity($panier, $nom_1);

$qty_2 = $produit_2->showQuantity($panier, $nom_2);

echo "Quantité de\n$nom_1: $qty_1\n$nom_2: $qty_2";