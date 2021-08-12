<?php
//MODELE HRD
//liste des hotels
function get_hrds($dbh,$idville,$idtype) {
	
	$requeteSQL= "select * from hrd where 1=1 ";
	
	//si $idville n'est pas vide
	if(!empty($idville)){
		$requeteSQL.= " AND idville = :idville ";
	}
	if(!empty($idtype)) {
		$requeteSQL.= " AND idtype = :idtype ";
	}	
	//echo $requeteSQL;

	$sth = $dbh->prepare($requeteSQL);
	
	$sth->bindparam(':idville',$idville, PDO::PARAM_STR);
	$sth->bindparam(':idtype',$idtype, PDO::PARAM_STR);


	$sth->execute();
	$tableauAssoc = $sth->fetchAll();
	return $tableauAssoc;
}


//recup type
function get_type($dbh,$idtype) {
	
	$requeteSQL= "select * from typehrd where 1=1 ";
	
	if(!empty($idtype)) {
		$requeteSQL.= " AND id = :idtype ";
	}	
	
	//echo $requeteSQL;

	$sth = $dbh->prepare($requeteSQL);

	$sth->bindparam(':idtype',$idtype, PDO::PARAM_STR);

	$sth->execute();
	$tableauAssoc = $sth->fetch();

	// echo "<pre>";
	// print_r($tableauAssoc);
	// echo "</pre>";	
	return $tableauAssoc;
}

?>