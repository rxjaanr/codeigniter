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
        }
    }
}
