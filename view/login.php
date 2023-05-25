<?php include(__DIR__.'/includes/header.php'); ?>
<main>
        <section>
            <div class="log__form">
                <form action="/admin/login" name="log_form" method="post">
                    <div class="log__form__id">
                        <label for="id" class="form-label">Identifiant :</label>
                        <input type="text" class="form-control log__form__input" id="id" name="id" value="<?= @$_POST['id'] ?>">
                        <?php if (isset($formErrors) && !empty($formErrors)) { 
                            foreach($formErrors as $error) { ?>
                                <p class="return_error text-center">
                                    <?= $error ?>
                                </p>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="log__form__pass">
                        <label for="password" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control log__form__input" id="password" name="password">
                    </div>
                    <button type="submit" class="log send btn">Me connecter</button>
                </form>
            </div>
        </section>
    </main>
<?php include(__DIR__.'/includes/footer.php'); ?>
