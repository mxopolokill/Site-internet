<?php
//on récupère de l'url, les 3e et 4e paramètres (le 1er et 2e c'était le controleur et l'action)
if (isset($params[2])){
	$idville=$params[2];
} else {
	$idville="";
}
if (isset($params[3])){
	$idtype = $params[3];
} else {
	$idtype = "";
}
// echo "ville :".$params[2];
// echo "type :".$params[3];
// echo "<br>";
//CONTROLEUR HRD
//on inclut notre modèle
include ('modeles/hrd.php');
include ('modeles/ville.php');

//On appelle 3 fois le MODELE
//on récupère la liste des hotels, restaurants et divertissements
$hrds = get_hrds($dbh,$idville,$idtype);

//on récupère les infos de la ville
$ville = get_ville($dbh,$idville);

//on récupère le libellé du type 
$type = get_type($dbh,$idtype);

if ($idtype==1){
	$conjonction="d'";
} else {
	$conjonction="de ";
}

//on appelle la vue
//on inclut notre vue
include ('vues/hrd-index.php');
?>