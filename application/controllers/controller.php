<?php

class Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }

    public function index()
    {
        return $this->load->view("pages/index.php");
    }

    public function dashboard()
    {
        $login = $this->session->userdata('logged_in');
        if ($login != TRUE) return redirect('auth/login');
        $data = [
            'user' => $this->session->userdata(),
            'registrationData' => $this->model->findAndJoin(
                'registrasi',
                $this->session->userdata('status') === '1' ? [] :
                    ['registrasi.id_user' => $this->session->userdata('id_user')],
                'user',
                'user.id_user = registrasi.id_user'
            )
        ];
        return $this->load->view('pages/dashboard/dashboard.php', $data);
    }
}
