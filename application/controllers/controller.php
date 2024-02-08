<?php

class Controller extends CI_Controller
{
    public function index()
    {
        return $this->load->view("pages/index.php");
    }

    public function dashboard()
    {
        $login = $this->session->userdata('logged_in');
        if ($login != TRUE) return redirect('auth/login');
        return $this->load->view('pages/dashboard/dashboard.php', ['user' => $this->session->userdata()]);
    }
}
