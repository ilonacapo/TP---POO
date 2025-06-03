<?php

class Vehicule {
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $dernierEntretien;

    public function __construct(string $marque, string $modele, int $anne, float $kilometrage)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $anne;
        $this->kilometrage = $kilometrage;
    }

    public function getMarque(){
        return $this->marque;
    }
    public function getModele() {
        return $this->modele;
    }
    public function getAnnee() {
        return $this->annee;
    }
    public function getKilometrage(){
        return $this->kilometrage;
    }

    public function getDernierEntretien() {
        return $this->dernierEntretien;
    }

    public function afficherInfos(){
        echo "Marque: $this->marque\nModèle: $this->modele\nAnnée de sortie: $this->annee\nKilométrage: $this->kilometrage\n";
    }

    public function programmerEntretien(string $date) {
        $this->dernierEntretien = $date;
        echo "Entretien programmé pour $date";
    }

    public function afficherProchainEntretien() {
        echo "Le prochain entretien aura lieu le $this->dernierEntretien";
    }
}

final class Voiture extends Vehicule {
    private $nombrePortes;
    private Vehicule $vehicule;

    public function __construct(int $nombrePortes, Vehicule $vehicule) {
        $this->nombrePortes = $nombrePortes;
        $this->vehicule = $vehicule;
    }

    public function getNombrePortes() {
        return $this->nombrePortes;
    }

    public function afficherInfos()
    {
        $vehicule = $this->vehicule;
        $marque = $vehicule->getMarque();
        $modele = $vehicule->getModele();
        $annee = $vehicule->getAnnee();
        $kilometrage = $vehicule->getKilometrage();

        echo "Type: Voiture\nNombre de Portes: $this->nombrePortes\nMarque: $marque\nModèle: $modele\nAnnée de sortie: $annee\nKilométrage: $kilometrage\n";

        
    }

}

final class Moto extends Vehicule{
private $cylindree;
private Vehicule $vehicule;

public function __construct(float $cylindree, Vehicule $vehicule) {
    $this->cylindree = $cylindree;
    $this->vehicule = $vehicule;
}

public function getCylindree() {
    return $this->cylindree;
}

public function afficherInfos()
{
    $vehicule = $this->vehicule;
        $marque = $vehicule->getMarque();
        $modele = $vehicule->getModele();
        $annee = $vehicule->getAnnee();
        $kilometrage = $vehicule->getKilometrage();

        echo "Type: Moto\nCylindrée: $this->cylindree\nMarque: $marque\nModèle: $modele\nAnnée de sortie: $annee\nKilométrage: $kilometrage\n";

        
}
}

final class Camion extends Vehicule{
    private $poidsMax;
    private $chargeActuelle;
    private Vehicule $vehicule;

    public function __construct(float $poidsMax, float $chargeActuelle, Vehicule $vehicule) {
        $this->vehicule = $vehicule;
        $this->chargeActuelle = $chargeActuelle;
        $this->$poidsMax = $poidsMax;
    }

    public function getPoidsMax() {
        return $this->poidsMax;
    }

    public function getChargeActuelle() {
        return $this->chargeActuelle;
    }

    public function afficherInfos()
    {
        Vehicule::afficherInfos();
        echo "Poids Max: $this->poidsMax\nCharge Actuelle: $this->chargeActuelle";
    }

    public function chargerPoids(float $poids) {
        if ($poids > $this->poidsMax) {
            echo ("Vous ne pouvez pas charger ce poids. La charge maximal du camion est $this->poidsMax kg\n");
        } else {
            $this->chargeActuelle += $poids;
            echo "La nouvelle charge du camion est de $this->chargeActuelle\n";
        }
    }
}