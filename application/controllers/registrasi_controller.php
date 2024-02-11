<?php

class Registrasi_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->redirectIfGuest();
    }

    private function redirectIfGuest()
    {
        if ($this->session->userdata('logged_in') != TRUE) return redirect('auth/login');
    }

    public function store()
    {
        switch ($this->input->method()) {
            case 'get':
                return $this->load->view('pages/dashboard/registration.php', ['user' => $this->session->userdata()]);
                break;
            case 'post':
                var_dump($this->input->post(['bid_lomba', 'asal_sekolah', 'nama_siswa', 'jk_siswa', 'nisn', 'tempat_lahir_siswa', 'tgl_lahir_siswa', 'no_hp_siswa', 'nama_guru', 'nip', 'jk_guru', 'tempat_lahir_guru', 'tgl_lahir_guru', 'no_hp_guru']));
                // BELUM SELESAI
                break;
        }
    }
}
