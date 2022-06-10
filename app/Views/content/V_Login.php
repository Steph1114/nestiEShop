<div class="container ">
    <div class="col-12 mt-5">
        <h1>Se connecter :</h1>
    </div>
</div>
<div class="container mt-5 bg-card">
    <div class="col-12">
        <form action="login" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4 mt-5 ">
                <label class="form-label">Pseudonyme</label>
                <input type="text" id="form2Example1" name="users_nickname" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label">Mot de passe</label>
                <input type="password" id="form2Example2" name="users_password" class="form-control" />
            </div>

            <?php if (isset($validation)) : ?>
                <div class="col-12 mt-3">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                </div>
            <?php endif; ?>


            <div class="form-outline mb-4">
                <a href="register"> Pas encore de compte ?</a>
            </div>
            <button class="offset-11 mb-3 btn-orange" type="submit" value="Se connecter">Se connecter</button>
        </form>
    </div>
</div>