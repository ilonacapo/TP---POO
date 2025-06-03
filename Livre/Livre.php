<?php

class Livre {
private $titre;
private $auteur;
private $anneePublication;

public function __construct(string $titre, string $auteur, int $anneePublication) {
    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->anneePublication = $anneePublication;
}

public function afficherDetails() {
    echo "Nom: $this->titre\nAutuheur: $this->auteur\nAnnée de parution: $this->anneePublication\n";
}

public function getTitre() {
    return $this->titre;
}

public function getAuteur(){
    return $this->auteur;
}

public function getAnnee() {
    return $this->anneePublication;
}
}

final class LivrePapier extends Livre {
    private $nombreDePages;
    private $livre;
    private $is_emprunted = false;

    public function __construct(int $nombreDePages, Livre $livre) {
        $this->nombreDePages = $nombreDePages;
        $this->livre = $livre;
    }
    public function getNombreDePages() {
        return $this->nombreDePages;
    }

    public function getEmprunted() : bool {
        return $this->is_emprunted;
    }

    public function afficherDetails()
    {
        $livre = $this->livre;
        $titre = $livre->getTitre();
        $auteur= $livre->getAuteur();
        $anneePublication = $livre->getAnnee();
        $nombreDePages = $this->nombreDePages;

        echo "Titre: $titre\nAutheur: $auteur\nAnnée de publication: $anneePublication\nNombre de pages: $nombreDePages";
    }

    
    public function emprunter() {
        if ($this->is_emprunted) {
            echo "Vous ne pouvez pas emprunter ce livre, il l'est déja par quelqu'un d'autre!\n";
        } else {
            $livre = $this->livre;
            $titre = $livre->getTitre();
            echo "Vous avez emprunté $titre\n";
            $this->is_emprunted = true;
        }
    }
}

final class Ebook extends Livre{
    private $format;
    private Livre $livre;
    private $is_emprunted = false;

    public function __construct(string $format, Livre $livre) {
        $this->format = $format;
        $this->livre = $livre;
    }

    public function getFormat() {
        return $this->format;
    }

    public function afficherDetails()
    {
        $livre = $this->livre;
        $titre = $livre->getTitre();
        $auteur= $livre->getAuteur();
        $anneePublication = $livre->getAnnee();
        $format = $this->format;

        echo "Titre: $titre\nAutheur: $auteur\nAnnée de publication: $anneePublication\nFormat: $format";
    }

    public function emprunter() {
        if ($this->is_emprunted) {
            echo "Vous ne pouvez pas emprunter ce livre, il l'est déja par quelqu'un d'autre!\n";
        } else {
            $livre = $this->livre;
            $titre = $livre->getTitre();
            echo "Vous avez emprunté $titre\n";
            $this->is_emprunted = true;
        }
    }

}
