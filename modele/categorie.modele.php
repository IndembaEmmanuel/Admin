<?php

function insertCat($libelle) {
	global $bdd;
	$insertion = $bdd->prepare("INSERT INTO categorie (libelle) VALUES (:libelle)");
	$insertion->bindValue(':libelle', $libelle, PDO::PARAM_STR);
	return $insertion->execute();
}

?>