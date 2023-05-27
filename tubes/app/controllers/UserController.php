<?php

class UserController extends Controller
{

    public function __construct()
    {
        if (empty($_SESSION['user'])) {
            header('location:' . BASE_URL . '/login');
        } else if (empty($_SESSION['user']['level'])) {
            header('location:' . BASE_URL . '/dashboard');
        }
    }

    public function index()
    {
        $data['dataPengguna'] = $this->model('User')->getDataPengguna();
        $data['title'] = 'Daftar User';
        $data['dataTable'] = true;

        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/users/index', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
        
    }
}
