<?php
include_once 'TacheController.php';
include_once 'TacheVue.php';

$controller = new TacheController();
$vue = new TacheVue();

$action = $_GET['action'] ?? null;

if ($action === 'ajouter' && !empty($_POST['nom']) && !empty($_POST['description'])) {
    $controller->ajouterTache($_POST['nom'], $_POST['description']);
} else if ($action === 'supprimer' && isset($_GET['id'])) {
    $controller->supprimerTache($_GET['id']);
} elseif ($action === 'modifierForm' && isset($_GET['id'])) {
    $taches = $controller->getTaches();
    if (isset($taches[$_GET['id']])) {
        $vue->modifierVue($_GET['id'], $taches[$_GET['id']]['nom'], $taches[$_GET['id']]['description']);
        exit;
    }
} elseif ($action === 'modifier' && isset($_GET['id']) && !empty($_POST['nom']) && !empty($_POST['description'])) {
    $controller->modifierTache($_GET['id'], $_POST['nom'], $_POST['description']);
}

$vue->afficherTaches($controller->getTaches());
?>
