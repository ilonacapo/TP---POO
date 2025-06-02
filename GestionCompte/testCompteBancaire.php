<?php

include 'CompteBancaire.php';

$compteJohn = new CompteBancaire(809.87, "John Doe");

$compteJohn->afficherSolde();

$compteJohn->depot(45.97);

$compteJohn->afficherSolde();

$compteJohn->depot(-45.97);

$compteJohn->afficherSolde();

$compteJohn->retrait(15);

$compteJohn->afficherSolde();

$compteJohn->retrait(-15);

$compteJohn->afficherSolde();

$compteJohn->calculInterets(2.5);

$compteJohn->afficherSolde();
$nom = $compteJohn->getTitulaire();
echo "Le titulaire du compte est $nom\n";