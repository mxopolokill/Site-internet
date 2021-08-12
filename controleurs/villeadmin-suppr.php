<?php
	// echo "<pre>";
	// print_r($params);
	// echo "</pre>";
// on inclut notre modèle
include ('modeles/ville.php');

if (isset($params[2])){
	$idville=$params[2];
} else {
	$idville="";
}

//echo "idville zzz:".$idville;

if (!empty($idville)){
	//echo 'toto';
	//on récupère les infos de la ville
	$villerecup = get_ville($dbh,$idville);
	//on supprime la ville
	$ville = suppr_ville($dbh,$idville);
	unlink('img/ville/'.$villerecup["blason"]);
}

// on appelle la vue index
$villes = get_villes($dbh);
include ('vues/villeadmin-index.php');
?>