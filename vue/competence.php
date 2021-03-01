<?php auth(1); ?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
            <div class="card animate__animated animate__backInDown">
                <div class="card-header">
                    <h5 class="text-center">Ajouter une compétence</h5>
                </div>
                <form method="post" action="" class="form theme-form">
                    <div class="card-body">
                        <?= $form->input('libelle', 'Nom de la compétence', 'text') ?>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            <?= $form->submit() ?>
                            <button type="reset" class="btn btn-danger active">Annuler</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?= Alerts::getFlash(); ?>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-success active animate__animated animate__backInDown" href="add-competence">+ Ajouter une compétence</a>
            </div>
            <div class="card animate__animated animate__backInDown">
                <div class="card-header">
                    <h5>Liste des compéténces</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-inverse text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom de la compétence</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $view = $bdd->query('SELECT * FROM competences ORDER BY id_comp DESC');
                            if ($view->rowCount() == 0) { ?>
                                <tr>
                                    <td colspan="3">Aucune compétence trouvée dans la basse de données</td>
                                </tr>
                            <?php } elseif (isset($_GET['edit'])) { 
                            while ($donnees = $view->fetch()) { ?>
                                <tr>
                                    <form method="post" action="">
                                    <td><?= $donnees['id_comp'] ?></td>
                                    <td>
                                        <input type="text" name="libelle" autocomplete="off" value="<?= $donnees['libelle'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <button type="submit" name="modifier" class="btn me-2" style="background-color: green; border-color: green;">
                                            <i class="align-middle text-light" data-feather="check"></i>
                                        </button>
                                        <button type="submit" name="retour" class="btn" style="background-color: red; border-color: red;">
                                            <i class="align-middle text-light" data-feather="x"></i>
                                        </button>
                                    </td>
                                    </form>
                                </tr>
                                <?php
                                if (isset($_POST['modifier'])) {
                                    $id_comp = $_GET['edit'];
                                    $libelle = htmlspecialchars($_POST['libelle']);
                                    $update = $bdd->prepare("UPDATE competences SET libelle = :libelle WHERE id_comp = '".$id_comp."' ");
                                    $update->bindValue(':libelle', $libelle, PDO::PARAM_STR);
                                    $update->execute();
                                    header('Location: competence');
                                }
                                ?>
                            <?php } ?>
                            <?php } else {
                                while ($donnees = $view->fetch()) {
                            ?>
                            <tr>
                                <td><?= $donnees['id_comp'] ?></td>
                                <td><?= $donnees['libelle'] ?></td>
                                <td class="table-action">
                                    <a class="btn btn-primary active fw-bold me-3" href="competence&edit=<?= $donnees['id_comp'] ?>">
                                        Modifier
                                    </a>
                                    <a class="btn btn-danger active fw-bold" href="competence&delete=<?= $donnees['id_comp'] ?>" onclick="return(confirm('Voulez-vous vraiment supprimer cette compétence ?'));">
                                        Supprimer
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>