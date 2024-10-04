<?php
$nom = $_POST['nom'] ?? NULL;
$classe = $_POST['classe'] ?? NULL;
$civilisation = $_POST['civilisation'] ?? NULL;

if ($nom !== null && $classe !== null && $civilisation !== null) {
    // Valider et filtrer les données entrantes si nécessaire

    // Instanciation de la classe
    $personnage = new $classe();
    $personnage->setNom($nom);
    $personnage->setType($classe);
    $personnage->setCivilisation($civilisation);
    $personnage->setPuissance(6);
    $personnage->setEndurance(4);
    $personnage->setOrientation(4);
    $personnage->setResistance(5);

    $personnageManager = new PersonnageManager();

    try {
        // Vérification si le nom est déjà utilisé
        if ($personnageManager->checkName($nom)) {
            echo "<div class='alert alert-warning' role='alert'>Veuillez saisir un autre nom, il est déjà pris !</div>";
        } else {
            // Ajout du personnage
            $ajoutReussi = $personnageManager->add($personnage);

            // Vérifier si l'ajout a réussi
            if ($ajoutReussi) {
                // Message de succès avec le bouton de retour à l'accueil
                echo "<div class='alert alert-success' role='alert'>Votre personnage a été ajouté avec succès ! <a href='index.php?page=home' class='btn btn-primary'>Retour à l'accueil</a></div>";
                exit();
            }
        }
    } catch (Exception $e) {
        // Gérer les exceptions
        echo 'Erreur : ' . $e->getMessage();
    }
} else {
    // Gérer le cas où un champ est manquant
    echo "<div class='alert alert-warning' role='alert'>Veuillez remplir tous les champs !</div>";
}
