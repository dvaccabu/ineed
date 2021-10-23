<main class="form-signup">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 text-center">
                <form method="post" action="<?= base_url() ?>customer/register">
                    
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                    <p class="mt-5 mb-3 text-muted"><?= $this->session->flashdata('register_error') ?></p>
                </form>
            </div>
        </div>
    </div>
</main>