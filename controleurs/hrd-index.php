<?php
// CONTROLEUR HRD

if (isset($params[2])) {
    $idville = $params[2];
} else {
    $idville = "";
}

if (isset($params[3])) {
    $idtype = $params[3];
} else {
    $idtype = "";
}



//echo " Ville : ".$idville;
//echo " Type : ".$idtype;

// On inclut notre MODELE
include ("modeles/hrd.php");

// On appelle le MODELE pour récupérer la liste des hotels restaus et divertissements dans un tableau associatif
$hrds = get_hrds($dbh, $idville, $idtype);

// On inclut notre VUE
include ("vues/hrd-index.php");
?>