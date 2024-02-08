<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" style="padding: 1.1rem 5% !important;">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-md-2">
                <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if ($this->session->userdata('logged_in') != TRUE) : ?>
                <li class="nav-item mx-md-2">
                    <a class="nav-link " href="<?= base_url('auth/login') ?>">Sign In</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>