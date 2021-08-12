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

if(!empty($_POST)){
	if (empty($_POST["id"])){
		ajout_ville($dbh,$_POST,$_FILES["blason"]["name"]);
	} else {
		$villerecup = get_ville($dbh,$_POST["id"]);
		if (empty($_FILES["blason"]["name"])){
			//on récupère les infos de la ville pour récup ancien nom de blason
			modif_ville($dbh,$_POST,$villerecup["blason"]);
		} else {
			modif_ville($dbh,$_POST,$_FILES["blason"]["name"]);
			unlink('img/ville/'.$villerecup["blason"]);
		}
	}
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";	
	
	if ((($_FILES["blason"]["type"] == "image/gif")
	|| ($_FILES["blason"]["type"] == "image/jpeg")
	|| ($_FILES["blason"]["type"] == "image/png"))
	&& ($_FILES["blason"]["size"] < 2000000))
	{
	if ($_FILES["blason"]["error"] > 0)
	  {
	  echo "Return Code: " . $_FILES["blason"]["error"] . "<br
	/>";
	  }
	else
	  {
	  echo "xxFichier à télécharger : " . $_FILES["blason"]["name"] .
	"<br />";
	  echo "Type: " . $_FILES["blason"]["type"] . "<br />";
	  echo "Taille: " . ($_FILES["blason"]["size"] / 1024) . "
	Kb<br />";
	  echo "Fichier temporaire : " . $_FILES["blason"]["tmp_name"] .
	"<br />";

	  if (file_exists("img/ville/" . $_FILES["blason"]["name"]))
		{
		echo " Le fichier".$_FILES["blason"]["name"] . "  existe déjà
	à cette emplacement. ";
		}
	  else
		{
		move_uploaded_file($_FILES["blason"]["tmp_name"],"img/ville/" . $_FILES["blason"]["name"]);
		echo "Enregistré dans : " . "/routard/img/ville/" .
	$_FILES["blason"]["name"];
		}
	  }
	}
  else
    {
    echo "Chemin invalide !!";
    }
	
	// on appelle la vue index
	$villes = get_villes($dbh);
	include ('vues/villeadmin-index.php');
} else {
	if (!empty($idville)){
		//echo 'toto';
		//on récupère les infos de la ville
		$ville = get_ville($dbh,$idville);
	}
	
	// on appelle la vue formulaire
	include ('vues/villeadmin-form.php');
}
?>