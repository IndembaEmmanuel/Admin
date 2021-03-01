<?php

function insertComp($libelle) {
	global $bdd;
	$insertion = $bdd->prepare("INSERT INTO competences (libelle) VALUES (:libelle)");
	$insertion->bindValue(':libelle', $libelle, PDO::PARAM_STR);
	return $insertion->execute();
}

?>