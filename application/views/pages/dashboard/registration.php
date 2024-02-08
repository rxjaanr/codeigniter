<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <?php include __DIR__ . '/../../partials/style.php' ?>
    <link href="<?= base_url('assets/dist/css/styles.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('assets/dist/js/fontawesome.js') ?>"></script>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view('partials/dashboard_topnav.php') ?>
    <div id="layoutSidenav">
        <?php $this->load->view('partials/dashboard_nav.php') ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid p-4">
                    <p>Registration Page</p>
                </div>
            </main>
            <!-- <footer class="py-4 bg-light mt-auto">
				<div class="container-fluid px-4">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Your Website 2023</div>
						<div>
							<a href="#">Privacy Policy</a>
							&middot;
							<a href="#">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer> -->
        </div>
    </div>
    <?php include __DIR__ . '/../../partials/script.php' ?>
    <script src="<?= base_url('assets/dist/js/scripts.js') ?>"></script>
</body>

</html>