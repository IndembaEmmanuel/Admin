<!DOCTYPE html>
<html>
<head>
    <title>Admin Indemba</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body class="dark-only">

<?php if (isset($_SESSION['id_u'])) { ?>
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <div class="header-logo-wrapper col-auto p-0">
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                </div>
            </div>
            <div class="left-header col horizontal-wrapper ps-0">
                <h3>Bienvenue dans ma partie Administration !</h3>
            </div>
        </div>
    </div>
    <div class="page-body-wrapper">
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper">
                    <a href="index">
                        <h3 class="text-light">Indemmanuel.com</h3>
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            
                            <?= $helpers->lien('accueil', 'Accueil') ?>
                            <?= $helpers->lien('categorie', 'Categorie') ?>
                            <?= $helpers->lien('projet', 'Projet') ?>
                            <?= $helpers->lien('image', 'Image') ?>
                            <?= $helpers->lien('competence', 'Competence') ?>
                            <?= $helpers->lien('pseudo', 'Pseudo') ?>
                            <?= $helpers->lien('mdp', 'Mot de passe') ?>
                            <?= $helpers->lien('deconnexion', 'Déconnexion') ?>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow">
                        <i data-feather="arrow-right"></i>
                    </div>
                </nav>
            </div>
        </div>
        <div class="page-body">
<?php } ?>
            <?= $contents ?>
<?php if (isset($_SESSION['id_u'])) { ?>
        </div>
    </div>
</div>
<?php } ?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


</body>
</html>