<?php
include 'interfaces/ErrorMessages.php';
include 'classes/Personnage.php';
include 'classes/Guerrier.php';
include 'classes/Ouvrier.php';
include 'classes/Explorateur.php';
include 'classes/PersonnageManager.php';
include 'template/layout/header.html';
session_start();
//session_destroy();
$action = $_GET['action'] ?? "home";

switch ($action) {
    case 'home':
        include 'template/pages/accueil.html';
        break;
    case 'ajoutPersonnage':
        include 'traitement/ajout.php';
        break;
    case 'listePersonnage':
        include 'template/pages/liste.php';
        break;
    case 'selectType':
        include 'template/pages/listCharacters.php';
        break;
    case 'formCreerPersonnage':
        include 'template/pages/form.html';
        break;
    case 'map':
        include 'template/pages/map.php';
        break;
    case 'Angleterre':
        include 'template/pages/map.php';
        break;
    case 'Norvege':
        include 'template/pages/map.php';
        break;
    case 'France':
        include 'template/pages/map.php';
        break;
    case 'sortie':
        include 'traitement/exit.php';
        break;
    default:
        echo 'erreur 404';
        break;
}
include 'template/layout/footer.php';
