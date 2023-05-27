<?php

class HomeController extends Controller
{

    public function index()
    {
        $data['title'] = 'Home';
        $data['newDestinations'] = $this->model('Destination')->getNewDestinations();
        $data['destinations'] = $this->model('Destination')->getDestinations();
   
        // $this->dd($data['newDestinations']);
        $this->view('components/frontend/header', $data);
        $this->view('components/frontend/navbar', $data);
        
        $this->view('page/frontend/welcome', $data);

        $this->view('components/frontend/sidebar');
        $this->view('components/frontend/footer');
        $this->view('components/frontend/script');
        
    }
}
