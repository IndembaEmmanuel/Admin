<?php

require "modele/pseudo.modele.php";

if (isset($_POST['submit'])) {
	if (!empty($_POST['pseudo'])) {
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$update = updatePseudo($pseudo);
	    Session::destroy();
	}
}

require "vue/pseudo.php"

?>