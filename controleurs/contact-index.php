<?php 
if (!empty($_POST) ) {
include ('modeles/contact.php') 
$message = set_contact($dbh,$_POST);
}
	include ('vues/contact-index.php');
?>
