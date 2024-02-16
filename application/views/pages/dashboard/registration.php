<?php $this->load->view('partials/dashboard_header.php') ?>
<!-- Main Content -->
<main>
    <?php echo validation_errors(); ?>
    <div class="container-fluid p-4 ">
        <p class="font-weight-bold h3 mt-md-1 mt-2">Registrasi</p>
        <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ipsa labore aliquid?</p>
        <form method="post" enctype="multipart/form-data" action="<?= base_url('dashboard/registration') ?>" class="row mt-5">
            <!-- Form Siswa -->
            <div class="col-12 col-xl-6 row">
                <div class="form-group col-12 col-sm-6">
                    <label>Bidang Lomba</label>
                    <select name="bid_lomba" class="form-control">
                        <?php foreach ($listBidangLomba as $bidang) : ?>
                            <option value="<?= $bidang['nama'] ?>"><?= $bidang['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger"><?= form_error('bid_lomba') ?></small>
                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>Asal Sekolah</label>
                    <select name="asal_sekolah" class="form-control">
                        <?php foreach ($listSekolah as $sekolah) : ?>
                            <option value="<?= $sekolah['nama'] ?>"><?= $sekolah['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger"><?= form_error('asal_sekolah') ?></small>
                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>Nama Siswa</label>
                    <input name="nama_siswa" value="<?= set_value('nama_siswa') ?>" type="text" class="form-control">
                    <small class="text-danger"><?= form_error('nama_siswa') ?></small>

                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>Jenis Kelamin</label>
                    <select name="jk_siswa" class="form-control">
                        <option selected value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>NISN</label>
                    <input name="nisn" value="<?= set_value('nisn') ?>" type="text" class="form-control numberonly">
                    <small class="text-danger"><?= form_error('nisn') ?></small>

                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>Tempat Lahir siswa</label>
                    <input name="tempat_lahir_siswa" value="<?= set_value('tempat_lahir_siswa') ?>" type="text" class="form-control">
                    <small class="text-danger"><?= form_error('tempat_lahir_siswa') ?></small>

                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>Tanggal Lahir siswa</label>
                    <input name="tgl_lahir_siswa" value="<?= set_value('tgl_lahir_siswa') ?>" type="date" class="form-control">
                    <small class="text-danger"><?= form_error('tgl_lahir_siswa') ?></small>

                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>No Hp Siswa</label>
                    <input name="no_hp_siswa" value="<?= set_value('no_hp_siswa') ?>" type="text" class="form-control numberonly">
                    <small class="text-danger"><?= form_error('no_hp_siswa') ?></small>

                </div>
            </div>
            <!-- End Form Siswa -->
            <!-- FORM GURU -->
            <div class="col-12 col-xl-6 row mt-lg-0 mt-4">
                <div class="form-group col-12 col-sm-6">
                    <label for="exampleFormControlInput1">Nama Guru</label>
                    <input name="nama_guru" value="<?= set_value('nama_guru') ?>" type="text" class="form-control" id="exampleFormControlInput1">
                    <small class="text-danger"><?= form_error('nama_guru') ?></small>

                </div>
                <div class="form-group col-12 col-sm-6">
                    <label for="exampleFormControlInput1">NIP</label>
                    <input name="nip" value="<?= set_value('nip') ?>" type="text" class="form-control numberonly" id="exampleFormControlInput1">
                    <small class="text-danger"><?= form_error('nip') ?></small>

                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>Jenis Kelamin Guru</label>
                    <select name="jk_guru" class="form-control">
                        <option selected value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>Tempat Lahir Guru</label>
                    <input name="tempat_lahir_guru" value="<?= set_value('tempat_lahir_guru') ?>" type="text" class="form-control">
                    <small class="text-danger"><?= form_error('tempat_lahir_guru') ?></small>

                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>Tanggal Lahir Guru</label>
                    <input name="tgl_lahir_guru" value="<?= set_value('tgl_lahir_guru') ?>" type="date" class="form-control">
                    <small class="text-danger"><?= form_error('tgl_lahir_guru') ?></small>

                </div>
                <div class="form-group col-12 col-sm-6">
                    <label>No Hp Guru</label>
                    <input name="no_hp_guru" value="<?= set_value('no_hp_guru') ?>" type="text" class="form-control numberonly">
                    <small class="text-danger"><?= form_error('no_hp_guru') ?></small>

                </div>
                <div class="form-group col-12 d-flex flex-column justify-content-center align-items-center">
                    <label class="invisible"></label>
                    <div class="d-flex gap-4 align-items-center">
                        <label for="file_bukti" class="text-center bg-dark p-2 text-white px-4 rounded mb-0">
                            <span><i class="fa-solid fa-cloud-arrow-up"></i></span>
                            Upload File Bukti</label>
                        <p class="mb-0" id="file-label">No files selected</p>
                    </div>
                    <small class="text-danger"><?php if (!empty($file_error)) echo $file_error ?></small>
                    <input name="file_bukti" accept="application/pdf" type="file" id="file_bukti" hidden>
                </div>
            </div>
            <div class="col-3">
            </div>
            <button class="col-6 mt-5 btn btn-dark" type="submit">Submit</button>
            <div class="col-3">
            </div>
        </form>
    </div>
</main>

<script>
    document.querySelectorAll('.numberonly').forEach((input) => {
        input.addEventListener("keypress", function(e) {
            if (isNaN(e.key)) e.preventDefault();
        });
    })
    const fileLabel = document.querySelector('#file-label')
    const inputFile = document.querySelector('input[type="file"]')
    window.addEventListener('load', function(e) {
        if (inputFile.files.length > 0) {
            fileLabel.innerHTML = inputFile.files[0].name
        }
        console.log(inputFile);
    })

    function handleFileChange(e) {
        if (e.target.files.length > 0) {
            fileLabel.innerHTML = e.target.files[0].name
        }
    }
    inputFile.addEventListener('change', handleFileChange)
</script>
<?php $this->load->view('partials/dashboard_footer.php') ?>