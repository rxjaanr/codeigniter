<?php $this->load->view('partials/dashboard_header.php') ?>
<!-- Main Content -->
<main>
    <div class="container-fluid p-4 ">
        <p class="font-weight-bold h3 mt-md-1 mt-2">Registrasi</p>
        <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ipsa labore aliquid?</p>
        <form method="post" action="<?= base_url('dashboard/registration') ?>" class="d-flex flex-column flex-xl-row mt-5">
            <!-- Form Siswa -->
            <div class="d-flex flex-column pr-5" style="width: fit-content;">
                <div class="d-flex gap-2 align-items-end">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Bidang Lomba</label>
                        <input name="bid_lomba" type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex : Web technologies">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Asal Sekolah</label>
                        <input name="asal_sekolah" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                </div>
                <div class="d-flex gap-2 align-items-end">
                    <div class="form-group flex-shrink-1">
                        <label for="exampleFormControlInput1">Nama Siswa</label>
                        <input name="nama_siswa" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group flex-grow-1">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jk_siswa" class="form-control" id="exampleFormControlSelect1">
                            <option value="L" selected>Laki - laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex gap-2 align-items-end">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tempat Lahir Siswa</label>
                        <input name="tempat_lahir_siswa" type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex: Kota Tegal">
                    </div>
                    <div class="form-group flex-grow-1">
                        <label for="exampleFormControlInput1">Tanggal Lahir Siswa</label>
                        <input name="tgl_lahir_siswa" type="date" class="form-control numberonly" id="exampleFormControlInput1" placeholder="ex: Kota Tegal">
                    </div>
                </div>
                <div class="d-flex gap-2 align-items-end">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NISN</label>
                        <input name="nisn" type="text" class="form-control numberonly" id="exampleFormControlInput1" placeholder="NISN SISWA">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">No HP Siswa</label>
                        <input name="no_hp_siswa" type="text" class="form-control numberonly" id="exampleFormControlInput1" placeholder="No Hp Siswa">
                    </div>
                </div>
            </div>
            <!-- End Form Siswa -->
            <!-- FORM GURU -->
            <div class="d-flex flex-column mt-5 mt-xl-0 " style="width: fit-content;">
                <div class="d-flex gap-2 align-items-end">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Guru</label>
                        <input name="nama_guru" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIP</label>
                        <input name="nip" type="text" class="form-control numberonly" id="exampleFormControlInput1">
                    </div>
                </div>
                <div class="d-flex gap-2 align-items-end">

                    <div class="form-group">
                        <label for="exampleFormControlInput1">No HP Guru</label>
                        <input name="no_hp_guru" type="text" class="form-control numberonly" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group flex-grow-1">
                        <label for="exampleFormControlSelect1">Jenis Kelamin Guru</label>
                        <select name="jk_guru" class="form-control" id="exampleFormControlSelect1">
                            <option value="L" selected>Laki - laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex gap-2 align-items-end">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tempat Lahir Guru</label>
                        <input name="tempat_lahir_guru" type="text" class="form-control " id="exampleFormControlInput1">
                    </div>
                    <div class="form-group flex-grow-1">
                        <label for="exampleFormControlInput1">Tanggal Lahir Guru</label>
                        <input name="tgl_lahir_guru" type="date" class="form-control " id="exampleFormControlInput1">
                    </div>
                </div>
                <button type="submit" class="mt-auto mb-3 btn btn-dark">
                    Submit
                </button>
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
</script>
<?php $this->load->view('partials/dashboard_footer.php') ?>