<?php
// On demarre la session
session_start();

//Connection à la base de données
include "global/connection.php";

include "templates/navbar.php";
//include "templates/breadcrumb.php";

//Récupération du paramètre controleur s'il existe
if (isset($_GET["p"])) {
	echo "p: ".$_GET["p"];
	$params = explode("/", $_GET["p"]);
} else {
	$params = array("","");
}

// Récupération du paramètre 0 pour controleur, si vide on affiche la page d'accueil
if (!empty($params[0])) {
	$controleur = $params[0];
} else {
	$controleur = "accueil";
}
//echo " controleur : ".$controleur;

// Récupération du paramètre 1 pour action, si vide on affiche la page d'accueil
if (!empty($params[1])) {
	$action = $params[1];
} else {
	$action = "index";
}
//echo " action :".$action;

// On vide les 2 premières lignes de params car ils sont stockés dans controleur et action, donc on en a plus besoin et
// au moins il nous reste que les vrais paramètres dans $params
unset($params[0]);
unset($params[1]);

include "controleurs/".$controleur."-".$action.".php";

include "templates/footer.php";

// Fermeture de la connexion SQL
$dbh = null;

//.htaccess -> rewriting url -> sert à améliorer la sécurité et avoir un meilleur référencement
// au lieu d'avoir des url du genre "index.php?page=classe&id=7" on pourra avoir style "lycee_classe_7.html"
// et du coup dans la nouvelle url, on peut mettre des mots clés pour bien référencer le site
?>
