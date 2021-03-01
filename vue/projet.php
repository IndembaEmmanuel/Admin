<?php auth(1); ?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-5">
            <div class="card animate__animated animate__backInDown">
                <div class="card-header">
                    <h5 class="text-center">Ajouter un projet</h5>
                </div>
                <form method="post" action="" class="form theme-form">
                    <div class="card-body">
                        <?= $form->input('titre', 'Titre du projet', 'text') ?>
                        <?= $form->textarea('description', 'Description du projet') ?>
                        <?= $form->input('lien_local', 'Lien local', 'text') ?>
                        <?= $form->input('lien_git', 'Lien GitHub', 'text') ?>
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
                <a class="btn btn-success active animate__animated animate__backInDown" href="add-projets">+ Ajouter un projet</a>
            </div>
            <div class="card animate__animated animate__backInDown">
                <div class="card-header">
                    <h5>Liste des projets</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-inverse text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Lien local</th>
                                <th scope="col">Lien GitHub</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $view = $bdd->query('SELECT * FROM projets ORDER BY id_p DESC');
                            if ($view->rowCount() == 0) { ?>
                                <tr>
                                    <td colspan="6">Aucun projet trouvé dans la basse de données</td>
                                </tr>
                            <?php } elseif (isset($_GET['edit'])) { 
                            while ($donnees = $view->fetch()) { ?>
                                <tr>
                                    <form method="post" action="">
                                    <td><?= $donnees['id_p'] ?></td>
                                    <td>
                                        <input type="text" name="titre" autocomplete="off" value="<?= $donnees['titre'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <textarea name="description" rows="3" class="form-control"><?= $donnees['description'] ?></textarea>
                                    </td>
                                    <td>
                                        <input type="text" name="lien_local" autocomplete="off" value="<?= $donnees['lien_local'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="lien_git" autocomplete="off" value="<?= $donnees['lien_git'] ?>" class="form-control">
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
                                    $id_p = $_GET['edit'];
                                    $titre = htmlspecialchars($_POST['titre']);
                                    $description = htmlspecialchars($_POST['description']);
                                    $lien_local = htmlspecialchars($_POST['lien_local']);
                                    $lien_git = htmlspecialchars($_POST['lien_git']);
                                    $update = $bdd->prepare("UPDATE projets SET titre = :titre, description = :description, lien_local = :lien_local, lien_git = :lien_git WHERE id_p = '".$id_p."' ");
                                    $update->bindValue(':titre', $titre, PDO::PARAM_STR);
                                    $update->bindValue(':description', $description, PDO::PARAM_STR);
                                    $update->bindValue(':lien_local', $lien_local, PDO::PARAM_STR);
                                    $update->bindValue('lien_git', $lien_git, PDO::PARAM_STR);
                                    $update->execute();
                                    header('Location: projet');
                                }
                                ?>
                            <?php } ?>
                            <?php } else {
                                while ($donnees = $view->fetch()) {
                            ?>
                            <tr>
                                <td><?= $donnees['id_p'] ?></td>
                                <td><?= $donnees['titre'] ?></td>
                                <td><?= $donnees['description'] ?></td>
                                <td><?= $donnees['lien_local'] ?></td>
                                <td><?= $donnees['lien_git'] ?></td>
                                <td class="table-action">
                                    <a class="btn btn-primary active fw-bold me-3" href="projet&edit=<?= $donnees['id_p'] ?>">
                                        Modifier
                                    </a>
                                    <a class="btn btn-danger active fw-bold" href="projet&delete=<?= $donnees['id_p'] ?>" onclick="return(confirm('Voulez-vous vraiment supprimer ce projet ?'));">
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
