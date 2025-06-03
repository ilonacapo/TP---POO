<?php

abstract class Paiement{
    private float $montant;

    public function __construct(float $montant) {
        $this->montant = $montant;
    }

    public function getMontant() {
         return $this->montant;
    }

    public function afficherMontant(){
        echo "Montant à payer: $this->montant euros\n";
    }

    abstract public function effectuerPaiement();
}

final class PaiementCB extends Paiement{

    public function effectuerPaiement(){
        echo "Paiement par carte effectué.\n";
    }
}

final class PaiementPaypal extends Paiement{

    public function effectuerPaiement(){
        echo "Paiement via Paypal effectué.\n";
    }
}

final class PaiementVirement extends Paiement{

    public function effectuerPaiement(){
        echo "Paiement par virement effectué.\n";
    }
}