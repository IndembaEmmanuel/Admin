<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <div class="page-body-wrapper">
        <div class="page-body">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-auto">
                        <div class="card animate__animated animate__backInDown">
                            <div class="card-header">
                                <h5 class="text-center">Bonjour veuillez-vous identifier</h5>
                            </div>
                            <form method="post" action="" class="form theme-form">
                                <div class="card-body">
                                    <?= $form->input('pseudo', 'Pseudo', 'text') ?>
                                    <?= $form->input('mdp', 'Mot de passe', 'password') ?>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-center">
                                        <?= $form->button('submit', 'login', 'primary', 'Connexion') ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?= Alerts::getFlash(); ?>
                </div>
            </div>
        </div>
    </div>
</div>