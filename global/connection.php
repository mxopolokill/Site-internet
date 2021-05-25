<?php

//Initialisation des variables
$serveur="localhost";
$user="root";
$pass="";
$database="routard";

//Ici on essaye la connexion
try {
    $dbh = new PDO('mysql:host='.$serveur.';dbname='.$database.';charset=utf8', $user, $pass);

//Et si il arrive pas à se connecter, il affiche de message d'erreur et tue (die();) la connexion.
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>