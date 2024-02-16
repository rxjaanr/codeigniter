<?php

class Registrasi_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->redirectIfGuest();
        $config =  ['upload_path' => FCPATH . '/assets/files/', 'allowed_types' => 'pdf'];
        $this->load->library('upload', $config);
    }

    private function redirectIfGuest()
    {
        if ($this->session->userdata('logged_in') != TRUE) return redirect('auth/login');
    }

    public function store()
    {
        switch ($this->input->method()) {
            case 'get':
                return $this->load->view('pages/dashboard/registration.php', ['user' => $this->session->userdata(), 'listSekolah' => $this->model->find('sekolah'), 'listBidangLomba' => $this->model->find('bidang_lomba')]);
                break;
            case 'post':
                $postData = $this->input->post(['bid_lomba', 'asal_sekolah', 'nama_siswa', 'jk_siswa', 'nisn', 'tempat_lahir_siswa', 'tgl_lahir_siswa', 'no_hp_siswa', 'nama_guru', 'nip', 'jk_guru', 'tempat_lahir_guru', 'tgl_lahir_guru', 'no_hp_guru']);
                $rules = [];
                foreach ($postData as $key => $_) {
                    $rules[] = [
                        'field' => $key,
                        'label' => ucwords(str_replace('_', ' ', $key)),
                        'rules' => 'required'
                    ];
                }
                $this->form_validation->set_rules($rules);
                $uploaded = $this->upload->do_upload('file_bukti');
                if ($this->form_validation->run() == FALSE || !$uploaded) {
                    return $this->load->view('pages/dashboard/registration.php', ['user' => $this->session->userdata(), 'listSekolah' => $this->model->find('sekolah'), 'listBidangLomba' => $this->model->find('bidang_lomba'), 'file_error' => $this->upload->display_errors()]);
                }
                $this->model->insert('registrasi', array_merge($postData, ['id_user' => $this->session->userdata('id_user'), 'file_bukti' => $this->upload->data('file_name')]));
                $this->session->set_flashdata('register_success', 'Data Lomba telah sukses di registrasi');
                return redirect(base_url('dashboard'));
                break;
        }
    }
}
