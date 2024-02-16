<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucwords($type); ?></title>
    <?php include __DIR__ . '../../../partials/style.php' ?>
    <style>
        @media (min-width : 768px) {
            #form-wrapper {
                width: 50%;
            }
        }

        @media (min-width: 768px) and (max-width : 1024px) {
            #box {
                width: 40% !important;
            }
        }

        @media (min-width : 1280px) {
            #box {
                width: 60% !important;
            }

            #form-wrapper {
                width: 40% !important;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex" style="min-height: 100vh;">
        <div id="box" class="w-50 d-none d-md-flex bg-primary position-relative">
            <p class="m-4 text-white" style="font-size: 1.2rem; font-weight:500">Lorem</p>
            <p class="position-absolute text-white" style="bottom: 0; padding: 2rem;">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab dolorum quis aspernatur est. Deleniti laborum ad debitis natus, hic perspiciatis!"</p>
        </div>

        <div id="form-wrapper" class="p-4 p-md-5 flex-grow-1">
            <form method="post" action="<?= base_url($type === 'register' ? 'auth/register' : 'auth/login') ?>" class="form-signin h-100 d-flex flex-column">
                <a class="text-right" href="<?= $type == 'register' ? base_url('auth/login') : base_url('auth/register') ?>">
                    <?= $type == 'register' ? 'Sign In' : 'Sign Up'  ?>
                </a>
                <!-- Show Alert if register success -->
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        <small>
                            <?= $this->session->flashdata('success') ?>
                        </small>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <!-- End alert -->

                <!-- Show Alert if Login ERROR -->
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                        <small>
                            <?= $this->session->flashdata('error') ?>
                        </small>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <!-- End alert -->

                <h1 class="h3 mb-1 text-center text-capitalize" style="margin-top: 10rem; font-weight: 700"><?= $type ?></h1>
                <p class="text-center mb-4 text-secondary">
                    <?= $type === 'register' ? 'Create new account' : 'Login with your credentials' ?>
                </p>
                <label for="inputusername" class="sr-only">Username </label>
                <input value="<?= set_value('username') ?>" type="text" id="inputusername" class="form-control" name="username" placeholder="Username">
                <small class="text-danger"><?php if (form_error('username')) echo form_error('username') ?></small>
                <label for="inputPassword" class="sr-only">Password</label>
                <input value="<?= set_value('password') ?>" type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">
                <small class="text-danger"><?php if (form_error('password')) echo form_error('password') ?></small>
                <button style="font-size: 1rem;" class="btn btn-lg btn-primary btn-block mt-auto text-capitalize" type="submit"><?= $type ?></button>

            </form>
        </div>
    </div>

    <?php include __DIR__ . '../../../partials/script.php' ?>

</body>

</html>