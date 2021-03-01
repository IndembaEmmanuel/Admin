<?php

function updatePseudo($pseudo) {
	global $bdd;
	$UPDATE_pseudo = "UPDATE user SET pseudo = :pseudo WHERE id_u = '".$_SESSION['id_u']."' ";
	$update = $bdd->prepare($UPDATE_pseudo);
	$update->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
	return $update->execute();
}

?>