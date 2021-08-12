<?php
//MODELE CONTACT
function set_contact($dbh,$tab) {
	
	$requeteSQL= "insert into contact (id,nom,prenom,rue,cp,ville,tel,email, sexe,message) values 
	(null,:nom,:prenom,:rue,:cp,:ville,:tel,:email,:sexe,:message)";

	$sth = $dbh->prepare($requeteSQL);
	unset($tab["id"]);
	echo "<pre>";
	print_r($tab);
	echo "</pre>";	

	//execution SQL : le binding est fait grace au execute $tab
	if ($sth->execute($tab)) {
		$message["success"]="insertion ok id :".$dbh->lastInsertId();
	} else {
		$message["danger"]="Problème SQL :".$requeteSQL;
	}
	return $message;
}
?>