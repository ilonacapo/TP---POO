<?php

class Contact {
    private $nom;
    private $prenom;
    private $email;

    public function __construct(string $nom, string $prenom, string $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }
    
    public function getNom() : string {
        return $this->nom;
    }

    public function getPrenom() :string {
        return $this->prenom;
    }

    public function getEmail() : string {
        return $this->email;
    }
}