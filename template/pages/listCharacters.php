<?php

$type = $_GET["type"] ?? NULL;
//var_dump($type);

$characters = new PersonnageManager();
$listCharacters = $characters->getList($type);
//var_dump($listCharacters);

if (!empty($listCharacters)) {
  //affichage de la description de la classe
  $type::description();
?>
  <div class="row col justify-content-between mt-5">
    <?php
    foreach ($listCharacters as $value) {
    ?>

      <div class="card" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title"><?php echo $value->getNom(); ?></h5>
          <h5 class="card-title"><?php echo $value->getType(); ?></h5>
          <p class="card-text"><?php echo $value->getPosition(); ?></p>
          <p class="card-text"><?php echo $value->getRepos(); ?></p>
          <p class="card-text"><?php echo $value->getCivilisation(); ?></p>
          <p class="card-text">Endurance: <?php echo $value->getEndurance(); ?></p>
          <p class="card-text">Puissance: <?php echo $value->getPuissance(); ?></p>
          <p class="card-text">Orientation: <?php echo $value->getOrientation(); ?></p>
          <p class="card-text">Résistance: <?php echo $value->getResistance(); ?></p>
          <a href="index.php?action=map&id=<?php echo $value->getId(); ?>" class="btn btn-primary">Je choisis</a>
        </div>
      </div>

    <?php
    }
    ?>
  </div>
<?php
} else {
  echo '<div class="alert alert-primary" role="alert">
  Aucun personnage de cette classe n\'a été créé
  </div>';
  echo '<div class="alert alert-dark" role="alert">
  Veuillez cliquer ici pour <a href="index.php?action=formCreerPersonnage">Créer votre personnage</a>
  </div>';
}
?>