<?php
include_once 'Paiement.php';
$paiements = [
    new PaiementCB(48),
    new PaiementPaypal(85),
    new PaiementVirement(9),
    new PaiementCB(9958),
    new PaiementPaypal(7885),
    new PaiementVirement(8885),
];

foreach ($paiements as $paiement) {
    $paiement->afficherMontant();
    $paiement->effectuerPaiement();
}