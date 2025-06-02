<?php

class CompteBancaire {
    private float $solde;
    private string $titulaire;

    public function __construct(float $solde, string $titulaire) {
        $this->solde = $solde;
        $this->titulaire = $titulaire;
    }

    public function depot(float $montant) {
        if($montant >= 0) {
            $this->solde += $montant;
        } else {
            echo "Vous ne pouvez pas déposer un montant négatif sur le solde!\n";
        }
    }

    public function retrait(float $montant) {
        if ($this->solde >= $montant && $montant >= 0){
            $this->solde -= $montant;
        } else {
            echo "Vous ne pouvez pas effectuer de retrait: solde insuffisant ou montant à retirer invalide!\n";
        }
    }

    public function afficherSolde() {
        echo "Vous disposez de $this->solde euro sur votre compte\n";
    }

    public function getTitulaire() : string {
        return $this->titulaire;
    }

    public function calculInterets(float $taux) {
        $interets = $this->solde * $taux;
        $nouveau_solde = $this->solde + $interets;

        echo "Vous avez perçu $interets d'intérêts cette année. Votre nouveau solde est de $nouveau_solde\n";

    }
}