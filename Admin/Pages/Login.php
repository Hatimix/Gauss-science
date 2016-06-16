<form class="form-signin" action="App/Login.php" method="POST">
    <h2 class="form-signin-heading"><?= lang('connexion') ?></h2>
    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="<?= lang('Username') ?>" required autofocus autocomplete="off">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="<?= lang('Password') ?>" required autocomplete="new-password">
    <div class="checkbox">
        <label>
            <input name="remember" type="checkbox" value="remember-me"> <?= lang('Remember') ?>
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit"><?= lang('connexion') ?></button>
</form>
