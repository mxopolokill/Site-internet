<?php
$host='localhost';
$dbname='routard';
$user='root';
$pass='';
try {
	//new PDO instancie un objet en $dbh
	//ce constructeur attend 3 paramètres : serveur/bdd, user , mot de pass
    $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass
	, array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>