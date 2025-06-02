<?php 

include 'Contact.php';

$contact1 = new Contact("Doe", "John", "john@doe.com");
$contact2 = new Contact("Ali", "As", "Ali@as.com");

$nom1 = $contact1->getNom();
$prenom1 = $contact1->getPrenom();
$email1 = $contact1->getEmail();

$nom2 = $contact2->getNom();
$prenom2 = $contact2->getPrenom();
$email2 = $contact2->getEmail();

echo "Voici:\n$nom1 $prenom1 $email1\n$nom2 $prenom2 $email2\n";