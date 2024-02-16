<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('partials/dashboard_header.php') ?>
<main>
	<div class="container-fluid p-4">
		<h3 class="font-weight-bold mt-4 mt-md-0">Data Pendaftaran</h3>
		<p class="text-secondary">Lihat data pendaftaran lomba <?= $this->session->userdata('status') == '1' ? 'semua user' : 'anda' ?> </p>
		<?php if ($this->session->flashdata('register_success')) : ?>
			<div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
				<small>
					<?= $this->session->flashdata('register_success') ?>
				</small>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if (count($registrationData) > 0) : ?>
			<table class="table mt-5">
				<thead>
					<tr>
						<th scope="col" class="d-none d-md-table-cell">No</th>
						<th scope="col">Bidang </th>
						<th scope="col">Nama Siswa</th>
						<th scope="col" class="d-none d-md-table-cell">Asal Sekolah</th>
						<th scope="col">Aksi</th>

					</tr>
				</thead>
				<tbody>
					<?php $i = 1;
					foreach ($registrationData as $data) : ?>
						<tr>
							<td scope="row" class="d-none d-md-table-cell"><?= $i ?></td>
							<td scope="col"><?= $data['bid_lomba'] ?></td>
							<td scope="col"><?= $data['nama_siswa'] ?></td>
							<td scope="col" class="d-none d-md-table-cell"><?= $data['asal_sekolah'] ?></td>
							<td scope="col">
								<i class="fa-solid bg-danger text-white p-1 rounded fa-print"></i>
							</td>
						</tr>
					<?php $i++;
					endforeach; ?>
				</tbody>
			</table>
	</div>
<?php elseif ($this->session->userdata('status') != '1') : ?>
	<p>Anda Belum mendaftar lomba apapun.</p>
<?php endif; ?>
<div class="d-flex mt-4 h-auto position-absolute" style="bottom: 1.3rem; right: 1.3rem">
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