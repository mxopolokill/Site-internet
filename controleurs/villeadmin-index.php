<?php
///on inclut notre modèle
include ('modeles/ville.php');

//on récupère la liste des villes
$villes = get_villes($dbh);

//on appelle la vue
include ('vues/villeadmin-index.php');
?>