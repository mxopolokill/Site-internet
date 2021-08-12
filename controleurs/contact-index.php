<?php
// echo "toto<br>";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

//si l'internaute a fait une saisie dans le formulaire contact
if (!empty($_POST)){
	
	include ('modeles/contact.php');
	//On appelle le MODELE pour insérer le contact
	$message = set_contact($dbh,$_POST);
}

//on appelle la vue
include ('vues/contact-index.php');
?>