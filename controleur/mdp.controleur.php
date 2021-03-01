<?php

require "modele/mdp.modele.php";

if (isset($_POST['submit'])) {
	if (!empty($_POST['mdp'])) {
		$mdp = sha1($_POST['mdp']);
		$update = updateMdp($mdp);
	    Session::destroy();
	}
}

require "vue/mdp.php";

?>