<?php
//MODELE CONTACT
function getUser($dbh,$email,$mdp) {
	$requeteSQL= "select * from user where 1=1 ";
	$requeteSQL.= " AND email = :email ";
	$requeteSQL.= " AND password = :mdp ";
	
	$sth = $dbh->prepare($requeteSQL);
	$sth->bindParam(':email', $email, PDO::PARAM_STR);
	$sth->bindParam(':mdp', md5($mdp), PDO::PARAM_STR);

	$sth->execute();
	$tableauAssoc = $sth->fetch();
	return $tableauAssoc;
}

function majUser($dbh,$email) {
	$requeteSQL= "update user SET derconnexion=now() where email = :email ";
	
	$sth = $dbh->prepare($requeteSQL);
	$sth->bindParam(':email', $email, PDO::PARAM_STR);

	$sth->execute();
	return true;
}
?>