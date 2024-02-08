<?php

class User_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }

    private function redirectIfAuth()
    {
        if ($this->session->userdata('logged_in') == TRUE) return redirect(base_url());
    }

    public function store()
    {
        $this->redirectIfAuth();
        switch ($this->input->method()) {
            case 'get':
                return $this->load->view('pages/auth/auth.php', ['type' => 'register']);
                break;
            case 'post':
                $rules = [
                    [
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required|is_unique[user.username]'
                    ],
                    [
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|min_length[6]'
                    ],
                ];
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE) {
                    return $this->load->view('pages/auth/auth.php', ['type' => 'register']);
                } else {
                    $data = $this->input->post(['username', 'password']);
                    $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
                    $success = $this->model->insert('user', $data);
                    if ($success) {
                        $this->session->set_flashdata('success', 'Your Account was registered successfully');
                        return redirect(base_url('auth/register'));
                    }
                }
                break;
        }
    }

    public function authenticate()
    {
        $this->redirectIfAuth();
        switch ($this->input->method()) {
            case 'get':
                return $this->load->view('pages/auth/auth.php', ['type' => 'sign in']);
                break;
            case 'post':
                $credentials = $this->input->post(['username', 'password']);
                $user = $this->model->findOne('user', ['username' => $credentials['username']]);
                $matchedPassword = password_verify($credentials['password'], $user['password']);
                if (!$matchedPassword) {
                    $this->session->set_flashdata('error', 'Invalid Username or Password, Please try again');
                    return redirect(base_url('auth/login'));
                }
                $data = array_merge($user, ['logged_in' => TRUE]);
                $this->session->set_userdata($data);
                return redirect(base_url('dashboard'));
                break;
        }
    }

    public function logout()
    {
        foreach ($this->session->userdata() as $data) {
            $this->session->unset_userdata($data);
        }

        $this->session->sess_destroy();
        return redirect(base_url());
    }
}
