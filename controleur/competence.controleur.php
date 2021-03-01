<?php

require "modele/competence.modele.php";

if (isset($_POST['submit'])) {
	$libelle = htmlspecialchars($_POST['libelle']);
	$insertion = insertComp($libelle);
	Alerts::setFlash("Competence ajoutée avec succès !");
}
if (isset($_POST['retour'])) {
	header('Location: competence');
}

// SUPPRESSION
if (isset($_GET['delete'])) {
	$id_comp  = $_GET['delete'];
	$delete = $bdd->prepare("DELETE FROM competences WHERE id_comp = '$id_comp'");
	$delete->execute(array($id_comp));
	header('Location: competence');
}
require "vue/competence.php";

?>