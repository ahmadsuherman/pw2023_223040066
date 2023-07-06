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
        $data['labelNewUser'] = [];
        $data['countNewUser'] = [];

        $data['labelDestination'] = [];
        $data['countDestination'] = [];
        
        $data['labelCategory'] = ['Aktif', 'Tidak Aktif'];
        $data['countCategory'] = [];
        
        $data['title'] = 'Dashboard';
        $data['chart'] = true;

        $data['getNewUserDashboard'] = $this->model('User')->getNewUserDashboard();
        $data['getNewDestinationDashboard'] = $this->model('Destination')->getNewDestinations();
        $data['getDestinationPopulers'] = $this->model('Destination')->getDestinationPopulers(limit: 5);
        
        $data['getNewUserRegistrationDashboard'] = $this->model('User')->getNewUserRegistrationDashboard();
        
        $data['getCountTotalUserDashboard'] = $this->model('User')->getCountTotalUserDashboard();
        $data['getCountTotalDestinationDashboard'] = $this->model('Destination')->getCountTotalDestinationDashboard();
        $data['getCountTotalCategoryDashboard'] = $this->model('Category')->getCountTotalCategoryDashboard();
        
        $data['getDestinationGroupByCategoryDashboard'] = $this->model('Destination')->getDestinationGroupByCategoryDashboard();
        $data['getCategoryGroupByIsActive'] = $this->model('Category')->getCategoryGroupByIsActive();
        
        foreach($data['getNewUserDashboard'] as $newUserDashboard){
            $data['labelNewUser'][] = $newUserDashboard['created_at'];
            $data['countNewUser'][] = $newUserDashboard['total_user'];
        }

        foreach($data['getDestinationGroupByCategoryDashboard'] as $destinationGroupByCategoryDashboard){
            $data['labelDestination'][] = $destinationGroupByCategoryDashboard['category_name'];
            $data['countDestination'][] = $destinationGroupByCategoryDashboard['total_destination'];
        }

        foreach($data['getCategoryGroupByIsActive'] as $categoryGroupByIsActive){
            // $data['labelCategory'][] = $categoryGroupByIsActive['is_active'];
            $data['countCategory'][] = $categoryGroupByIsActive['total_category'];
        }

        $this->view('components/backend/header', $data);
        $this->view('components/backend/navbar', $data);
        $this->view('components/backend/sidebar', $data);
        
        if($_SESSION['user']['level'] == 'Admin'){
            $this->view('page/backend/dashboard/index-admin', $data);
        } 
        
        if($_SESSION['user']['level'] == 'Pengguna'){
            $this->view('page/backend/dashboard/index-user', $data);
        } 
        
        $this->view('components/backend/footer', $data);
        $this->view('components/backend/script', $data);
        
    }
}
