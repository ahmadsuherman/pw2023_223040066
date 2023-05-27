<?php

class DashboardController extends Controller
{

    public function __construct()
    {
        if (empty($_SESSION['user'])) {
            header('location:' . BASE_URL . '/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        $this->view('page/backend/dashboard/index', $data);
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
        
    }
}
