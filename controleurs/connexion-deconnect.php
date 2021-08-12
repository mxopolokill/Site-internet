<?php
	echo "controleur<br>";
	echo "controleur<br>";
	echo "controleur<br>";
	echo "controleur<br>";
	echo "controleur<br>";
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
//si l'internaute a fait une saisie dans le formulaire contact
if (!empty($_POST)){
	include ('modeles/user.php');
	//On appelle le MODELE pour maj date heure de deconnexion
	majUser($dbh,$_SESSION['login']);
	unset($_SESSION['login']);
	unset($_SESSION['prenom']);
	unset($_SESSION['droit']);
	session_destroy();
}

//on appelle la vue formualaire vide
include ('vues/connexion-form.php');
?>