<?php

require "modele/categorie.modele.php";

if (isset($_POST['submit'])) {
	$libelle = htmlspecialchars($_POST['libelle']);
	$insertion = insertCat($libelle);
	Alerts::setFlash("Catégorie ajoutée avec succès !");
}
if (isset($_POST['retour'])) {
	header('Location: categorie');
}

// SUPPRESSION
if (isset($_GET['delete'])) {
	$id_cat  = $_GET['delete'];
	$delete = $bdd->prepare("DELETE FROM categorie WHERE id_cat = '$id_cat'");
	$delete->execute(array($id_cat));
	header('Location: categorie');
}
require "vue/categorie.php";

?>