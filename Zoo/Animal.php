<?php

class Animal {
    private string $nom;
    private int $age;

    public function __construct(string $nom, int $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getAge() {
        return $this->age;
    }

    public function decrire(){
        echo "Je suis un $this->nom et j'ai $this->age\n";
    }
}

final class Chien extends Animal{
    private string $race;
    private Animal $animal;

    public function __construct(string $race, Animal $animal){
        $this->race = $race;
        $this->animal = $animal;
    }

    public function getRace(){
         return $this->race;
    }

    public function decrire() {
        echo "Je suis un chien de race $this->race\n";
    }

    public function crier() {
        return "Wouf!\n";
    }
}

final class Chat extends Animal {
    private string $couleur;
    private Animal $animal;

    public function __construct(string $couleur, Animal $animal){
        $this->couleur = $couleur;
        $this->animal = $animal;
    }

    public function getcouleur(){
         return $this->couleur;
    }

    public function decrire() {
        echo "Je suis un chat de couleur $this->couleur\n";
    }

    public function crier() {
        return "Miaou!\n";
    }
}

final class Oiseau extends Animal {
    private string $espece;
    private Animal $animal;

    public function __construct(string $espece, Animal $animal){
        $this->espece = $espece;
        $this->animal = $animal;
    }

    public function getRace(){
         return $this->espece;
    }

    public function decrire() {
        echo "Je suis un oiseau de l'espèce $this->espece\n";
    }

    public function crier(){
        return "Cui-cui!";
    }
}
