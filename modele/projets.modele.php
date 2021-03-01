<?php

function insertProjet($titre, $description, $lien_local, $lien_git) {
	global $bdd;
	$insertion = $bdd->prepare("
		INSERT INTO projets (titre, description, lien_local, lien_git) 
		VALUES (:titre, :description, :lien_local, :lien_git)
	");
	$insertion->bindValue(':titre', $titre, PDO::PARAM_STR);
	$insertion->bindValue(':description', $description, PDO::PARAM_STR);
	$insertion->bindValue(':lien_local', $lien_local, PDO::PARAM_STR);
	$insertion->bindValue(':lien_git', $lien_git, PDO::PARAM_STR);
	return $insertion->execute();
}

?>