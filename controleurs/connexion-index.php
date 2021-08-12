<?php
// echo "controleur<br>";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo "SESSION :";
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
$user=array();

//si l'internaute a fait une saisie dans le formulaire contact
if (!empty($_POST)){
	include ('modeles/user.php');
	//On appelle le MODELE pour vérifier email et mdp
	$user = getUser($dbh,$_POST["login"],$_POST["mdp"]);
	$_SESSION['login']=$user['email'];
	$_SESSION['nom']=$user['nom'];
	$_SESSION['prenom']=$user['prenom'];
	$_SESSION['droit']=$user['droit'];
	
	echo "retour getUser <br>";
	echo "<pre>";
	print_r($user);
	echo "</pre>";	
}

//si saisie ok
if (!empty($user)||isset($_SESSION['nom'])){
	//on appelle la vue ok (vue de déconnection)
	include ('vues/connexion-ok.php');
	
} else {
	//on appelle la vue formulaire vide (vue de connection)
	include ('vues/connexion-form.php');
}
?>