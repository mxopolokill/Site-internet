<?php
//recup des villes
function get_villes($dbh) {
	$requeteSQL= "select * from ville where 1=1 ";
	//echo $requeteSQL;
	$sth = $dbh->prepare($requeteSQL);
	
	$sth->execute();
	$tableauAssoc = $sth->fetchAll();
	return $tableauAssoc;
}

//recup d'une ville
function get_ville($dbh,$idville) {
	$requeteSQL= "select * from ville where 1=1";
	//si $idville n'est pas vide
	if(!empty($idville)){
		$requeteSQL.= " AND id = :idville ";
	}
	//echo $requeteSQL;

	$sth = $dbh->prepare($requeteSQL);
	$sth->bindparam(':idville',$idville, PDO::PARAM_STR);

	$sth->execute();
	$tableauAssoc = $sth->fetch();
	return $tableauAssoc;
}

//suppression d'une ville
function suppr_ville($dbh,$idville) {
	$requeteSQL= "delete from ville where 1=1";
	//si $idville n'est pas vide
	if(!empty($idville)){
		$requeteSQL.= " AND id = :idville ";
	}
	//echo $requeteSQL;

	$sth = $dbh->prepare($requeteSQL);
	$sth->bindparam(':idville',$idville, PDO::PARAM_STR);
	
	return $sth->execute();
}

//ajout d'une ville
function ajout_ville($dbh,$tableau,$blason) {
	
	echo "<pre>";
	print_r($tableau);
	echo "</pre>";
	
	$requeteSQL= "insert into ville (nomville,blason) values (:nomville, :blason);";

	$sth = $dbh->prepare($requeteSQL);
	$sth->bindparam(':nomville',$tableau["nomville"], PDO::PARAM_STR);
	$sth->bindparam(':blason',$blason, PDO::PARAM_STR);

	return $sth->execute();
}
//modif d'une ville
function modif_ville($dbh,$tableau,$blason) {
	$requeteSQL= "update ville set nomville =:nomville, blason= :blason where id=:id;";

	$sth = $dbh->prepare($requeteSQL);

	$sth->bindparam(':nomville',$tableau["nomville"], PDO::PARAM_STR);
	$sth->bindparam(':blason',$blason, PDO::PARAM_STR);
	$sth->bindparam(':id',$tableau["id"], PDO::PARAM_STR);

	return $sth->execute();
}
?>