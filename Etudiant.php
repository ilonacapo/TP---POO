<?php

class Etudiant {
    private $nom;
    private $prenom;
    private $notes = [];

    public function __construct(string $nom, string $prenom)
    {
       $this->nom = $nom;
       $this->prenom = $prenom; 
    }

    public function ajouterNote(float $note) {
        $this->notes = array_push($this->notes, $note);
    }

    private function getNotes() : array {
        return $this->notes;
    }

    private function calculerMoyenne() : float{
         $moyenne = (array_sum($this->notes) / count($this->notes));
         return $moyenne;
    }

    public function afficherInformations() {
        $nom = $this->nom;
        $prenom = $this->prenom;
        $notes = $this->getNotes();
        $moyenne = $this->calculerMoyenne();

        echo "Informations de l'étudiant.\nNom: $nom\nPrénom(s): $prenom\nNotes: $notes\nMoyenne: $moyenne";
    }
}