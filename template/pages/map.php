<?php
$select = $_GET['id'] ?? NULL;
$personnage = new PersonnageManager();
$personnageSelect = $personnage->get($select);
$_SESSION['personnage'] = $personnageSelect;
?>
<!--affichage de l'identité du personnage sélectionné-->
<p>Vous vous appelez <?php echo $_SESSION['personnage']->getNom(); ?>,vous êtes un <?php echo " " . $_SESSION['personnage']->getType(); ?></p>
<?php
//affichage de la question du choix du pays
function travel($civilisation)
{
    switch ($civilisation) {
        case 'Guerrier':
            return "<p>Dans quel pays voulez-vous combattre ?</p>";
            break;
        case 'Ouvrier':
            return "<p>Dans quel pays voulez-vous construire ?</p>";
            break;
        case 'Explorateur':
            return "<p>Quel pays voulez-vous découvrir ?</p>";
            break;
        default:
            return "<p>Vous n'avez aucune identité !</p>";
            break;
    }
}
echo travel($_SESSION['personnage']->getType());
//affichage des liens "pays"
$pays = ["Norvège", "Angleterre", "France"];
if (in_array($_SESSION['personnage']->getCivilisation(), $pays)) {
    //supprime la valeur correspondant à la civilisation du personnage en cours
    unset($pays[array_search($_SESSION['personnage']->getCivilisation(), $pays)]);
    //trie du tableau pour ne pas avoir de décalage au niveau des index
    sort($pays);
?>
    <a href="index.php?action=<?php echo $pays[0] ?>">
        <h4><?php echo $pays[0] ?></h4>
    </a>
    <a href="index.php?action=<?php echo $pays[1] ?>">
        <h4><?php echo $pays[1] ?></h4>
    </a>
<?php
}
?>
<div id="map">

</div>