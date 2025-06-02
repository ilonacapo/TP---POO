<?php 

class Etudiants {
    private $liste_etudiants = [];

    public function __construct(){
        $this->liste_etudiants = [];
    }

    public function ajoutEtudiant(Etudiant $etudiant) {
        array_push($this->liste_etudiants, $etudiant);
    }

    public function retraitEtudiant($nom) {
        $index = array_search($nom, $this->liste_etudiants);
        unset($this->liste_etudiants[$index]);
    }
    
    public function afficheEtudiantMoyenne() {
        $moyennes = [];

        foreach ($this->liste_etudiants as $etudiant) {
            $nom = $etudiant->nom;
            $moyenne = $etudiant->calculerMoyenne();
            $moyennes[$nom] = $moyenne;
        }
        foreach ($moyennes as $nom => $moyenne) {
            echo "Nom: $nom, Moyenne: $moyenne\n";
        }
    }
}