<?php

require "modele/connexion.modele.php";

if (isset($_SESSION['id_u'])) {
	header('Location: http://localhost/tombruaire.admin/');
}

if (isset($_POST['login'])) {
    if (!empty($_POST['pseudo'])) {
        if (!empty($_POST['mdp'])) {
            $pseudo = $_POST['pseudo'];
            $mdp = sha1($_POST['mdp']);
            $requete = getUtilisateur($pseudo, $mdp);
            if ($requete) {
				$session->setVar('id_u', $requete['id_u']);
				$session->setVar('pseudo', $requete['pseudo']);
				$session->setVar('lvl', $requete['lvl']);
				header('Location: accueil');
				exit();
            } else {
                Alerts::setFlash("Identifiants incorrects.", "danger");
            }
        } else {
            Alerts::setFlash("Veuillez saisir votre mot de passe", "warning");
        }
    } else {
        Alerts::setFlash("Veuillez saisir votre pseudo", "warning");
    }
}

require "vue/connexion.php";

?>