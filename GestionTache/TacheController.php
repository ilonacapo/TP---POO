<?php
session_start();

class TacheException extends Exception {}

class TacheController
{
    public function __construct()
    {
        if (!isset($_SESSION['taches'])) {
            $_SESSION['taches'] = [];
        }
    }

    public function ajouterTache($nom, $description)
    {
        try {
            if (empty($nom)) {
            throw new TacheException("Nom manquant");
        } else if (empty($description)) {
            throw new TacheException("Description manquante");
        }
            $_SESSION['taches'][] = ["nom" => $nom, "description" => $description];
        } catch (TacheException $e) {
            echo $e->getMessage();
        }
    }

    public function getTaches()
    {
        return $_SESSION['taches'];
    }

    public function supprimerTache($id)
    {
        try {
            if (!isset($_SESSION['taches'][$id])) {
                throw new TacheException("La tâche n'existe pas.");
            }
            unset($_SESSION['taches'][$id]);
            $_SESSION['taches'] = array_values($_SESSION['taches']);
        } catch (TacheException $e) {
            echo$e->getMessage();
        }
    }

    public function modifierTache($id, $nom, $description)
    {
        try {
            if (!isset($_SESSION['taches'][$id])) {
                throw new TacheException("a tâche n'existe pas.");
            }
            if (empty($nom)) {
            throw new TacheException("Nom manquant");
        }
        if (empty($description)) {
            throw new TacheException("Description manquante");
        }
            $_SESSION['taches'][$id] = ["nom" => $nom, "description" => $description];
        } catch (TacheException $e) {
            echo $e->getMessage();
        }
    }
}
?>
