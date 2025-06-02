<?php

$contact1 = [
    "Nom" => "Dupont",
    "Prénom" => "Alice",
    "Email" => "alice@example.com",
];

$contact2 = [
    "Nom" => "Martin",
    "Prénom" => "Bob",
    "Email" => "bob@example.com",
];

$listeContacts = [$contact1, $contact2];

foreach ($listeContacts as $contact) {
    foreach($contact as $info) {
        echo "$info ";
    }
    echo "\n";
}