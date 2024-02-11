<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('partials/dashboard_header.php') ?>
<main>
	<div class="container-fluid p-4">
		<div class="d-flex mt-4 h-auto">
			<div class="text-dark py-2 bg-primary px-3 rounded">
				<a href="<?= base_url('dashboard/registration') ?>" class="text-white text-decoration-none">
					<span>
						<i class="fa-solid fa-plus"></i>
					</span>
					Daftar Lomba
				</a>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('partials/dashboard_footer.php') ?>