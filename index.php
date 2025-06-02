<?php

include 'Etudiant.php';

$etudiant_1 = new Etudiant("Boto", "Eza");
$etudiant_2 = new Etudiant("Kourouma", "Ahmadou");

$etudiant_1->ajouterNote(15);
$etudiant_1->ajouterNote(16.25);
$etudiant_1->ajouterNote(17);

$etudiant_2->ajouterNote(18);
$etudiant_2->ajouterNote(19.5);
$etudiant_2->ajouterNote(18);

$etudiant_1->afficherInformations();

$etudiant_2->afficherInformations();