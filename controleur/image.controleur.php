<?php

require "modele/image.modele.php";

if (isset($_POST['submit'])) {
	$lien = htmlspecialchars($_POST['lien']);
	$insertion = insertImg($lien);
	Alerts::setFlash("Image ajoutée avec succès !");
}
if (isset($_POST['retour'])) {
	header('Location: image');
}

// SUPPRESSION
if (isset($_GET['delete'])) {
	$id_img  = $_GET['delete'];
	$delete = $bdd->prepare("DELETE FROM images WHERE id_img = '$id_img'");
	$delete->execute(array($id_img));
	header('Location: image');
}
require "vue/image.php";

?>