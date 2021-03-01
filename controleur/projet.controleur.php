<?php

require "modele/projets.modele.php";

if (isset($_POST['submit'])) {
	$titre = htmlspecialchars($_POST['titre']);
	$description = htmlspecialchars($_POST['description']);
	$lien_local = htmlspecialchars($_POST['lien_local']);
	$lien_git = htmlspecialchars($_POST['lien_git']);
	$insertion = insertProjet($titre, $description, $lien_local, $lien_git);
	Alerts::setFlash("Projet ajouté avec succès !");
}
if (isset($_POST['retour'])) {
	header('Location: projet');
}

// SUPPRESSION
if (isset($_GET['delete'])) {
	$id_p  = $_GET['delete'];
	$delete = $bdd->prepare("DELETE FROM projets WHERE id_p = '$id_p'");
	$delete->execute(array($id_p));
	header('Location: projet');
}
require "vue/projet.php";

?>