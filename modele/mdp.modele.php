<?php

function updateMdp($mdp) {
	global $bdd;
	$UPDATE_motdepasse = "UPDATE user SET mdp = :mdp WHERE id_u = '".$_SESSION['id_u']."' ";
	$update = $bdd->prepare($UPDATE_motdepasse);
	$update->bindValue(':mdp', $mdp, PDO::PARAM_STR);
	return $update->execute();
}

?>