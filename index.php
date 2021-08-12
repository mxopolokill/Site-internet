<?php
// On demarre la session
session_start();
//index : routeur
// tout appel de page va passer par ce routeur
include "global/connection.php";
include "templates/entete.php";
if(isset($_SESSION['droit'])){
	include "templates/menuadmin.php";
} else {
	include "templates/menu.php";
}
	
//si $get controleur existe
// mon param p contient l'url  : /controleur/action/noville/notype/param3/param4 ..etc
if(isset($_GET["p"])){
	//echo "p :".$_GET["p"];
//J'EXPLOSE L'URL SUR LE SLASH et on recupère un tableau params	
	$params = explode("/", $_GET["p"]);
} else {
	$params = array("","");
}


	// echo "<pre>";
	// print_r($params);
	// echo "</pre>";

//récupération du controleur
if(!empty($params["0"])){
	$controleur = $params["0"];
} else {
	$controleur = "accueil";
}
// echo "controleur :".$controleur;

//récupération de l'action
if(!empty($params["1"])){
	$action = $params["1"];
} else {
	$action = "index";
}
// echo "action :".$action;

//je supprime de mon tableau le controleur et l'action déjà récupérés
unset($params[0]);
unset($params[1]);

// echo "<pre>";
// print_r($params);
// echo "</pre>";

//j'include la page passée en paramètre
include "controleurs/".$controleur."-".$action.".php";

include "templates/pied.php";
$dbh = null;
?>