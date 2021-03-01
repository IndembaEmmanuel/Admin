<?php

function insertImg($lien) {
	global $bdd;
	$insertion = $bdd->prepare("INSERT INTO images (lien) VALUES (:lien)");
	$insertion->bindValue(':lien', $lien, PDO::PARAM_STR);
	return $insertion->execute();
}

?>