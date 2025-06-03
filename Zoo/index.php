<?php

include 'Animal.php';


$animaux = [
    "chien1" => new Chien("Caniche", new Animal("Tobi", 5)),
    "chat1" => new Chat("Tigré", new Animal("Loulou", 5)),
    "Oiseau1" => new Oiseau("Colibri", new Animal("Sami", 5)),
];

foreach($animaux as $animal) {
    $animal->decrire();
   $cri = $animal->crier();
   echo "$cri\n";
}