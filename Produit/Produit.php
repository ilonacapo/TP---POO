<?php

class Produit {
    private $nom;
    private $prix;

    public function __construct(string $nom, float $prix) {
        $this->nom = $nom;
        $this->prix = $prix;
    }

public function getNom() {
    return $this->nom;
}

public function getPrix() {
    return $this->prix;
}


}