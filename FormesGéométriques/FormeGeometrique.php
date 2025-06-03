<?php

abstract class FormeGeometrique{
abstract protected function calculerAire();
}

final class Cercle extends FormeGeometrique{
    private float $pi = 3.14;
    private float $rayon;

    public function __construct(float $rayon) {
       $this->rayon = $rayon;
    }

    public function getRayon() {
        return $this->rayon;
    }

    public function calculerAire(){
        $aire = $this->pi * ($this->rayon * $this->rayon);
        return $aire;
    }
}

final class Rectangle extends FormeGeometrique{
    private float $longueur;
    private float $largeur;

    public function __construct(float $largeur, float $longueur) {
       $this->largeur = $largeur;
       $this->longueur = $longueur;
    }

    public function getlargeur() {
        return $this->largeur;
    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function calculerAire(){
        $aire = $this->longueur * $this->largeur;
        return $aire;
    }
}

final class Triangle extends FormeGeometrique{
    private float $a;
    private float $b;
    private float $c;

    public function __construct(float $a, float $b, float $c) {
       $this->a = $a;
       $this->b = $b;
       $this->c = $c;
    }

    public function geta() {
        return $this->a;
    }

    public function getb() {
        return $this->b;
    }

    public function getc() {
        return $this->c;
    }

    private function calculP(){
        $p = ($this->a + $this->b + $this->c) / 2;
        return $p;
    }
    public function calculerAire(){
        $p = $this->calculP();
        $aire = sqrt($p*($p - $this->a)*($p - $this->b)*($p-$this->c));
        return $aire;
    }
}