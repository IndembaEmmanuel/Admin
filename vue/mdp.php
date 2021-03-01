<?php auth(1); ?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
            <div class="card animate__animated animate__backInDown">
                <div class="card-header">
                    <h5 class="text-center">Modifier le mot de passe</h5>
                </div>
                <form method="post" action="" class="form theme-form">
                    <div class="card-body">
                        <?= $form->input('mdp', 'Nouveau mot de passe', 'password') ?>
                        <p class="text-center text-warning">Vous serez déconnecté après la moficiation.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            <?= $form->submit('primary', 'Modifier') ?>
                            <button type="reset" class="btn btn-danger active">Annuler</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?= Alerts::getFlash(); ?>
    </div>
</div>