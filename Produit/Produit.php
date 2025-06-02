<?php

class Produit
{
    private $nom;
    private $prix;

    public function __construct(string $nom, float $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function afficherProduit()
    {
        echo "Nom: $this->nom, Prix: $this->prix\n";
    }

    public function ajouterAuPanier(array $panier, int $quantite)
    {
        $index = 0;

        if ($quantite > 0) {
            while ($index < $quantite) {
                array_push($panier, $this);
                $index += 1;
            }
            return $panier;
        }
    }

    public function showQuantity(array $panier, string $nomP) {
        $nb = 0;
        foreach ($panier as $produit) {
            $nom = $produit->getNom();
            if ($nom === $nomP) {
                $nb += 1;
            }

        }
        return $nb;
    }
}
