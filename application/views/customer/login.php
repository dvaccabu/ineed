<main class="form-signin">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 text-center">
                <form method="post" action="<?= base_url() ?>customer/login">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?= set_value('email') ?>">
                        <label for="floatingInput">Email address</label>
                        <?= form_error('email'); ?>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                        <?= form_error('password') ?>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted"><?= $this->session->flashdata('login_error') ?></p>
                </form>
            </div>
        </div>
    </div>
</main>