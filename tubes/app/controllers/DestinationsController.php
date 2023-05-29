<?php

class DestinationsController extends Controller
{

    public function index()
    {
        $url        = BASE_URL . $_SERVER['REQUEST_URI'];
        $parseUrl   = parse_url($url);
        // dd($parseUrl);
        $parseUrlQuery = isset($parseUrl['query']) ? $parseUrl['query'] : 'page=1';
        $queryStringPagination = str_replace("page=","",$parseUrlQuery);

        $data['title'] = 'Home';

        $totalItem = $this->model('Destination')->getTotalItem();
        $totalItemByPage = 10;
        $totalPage = ceil($totalItem / $totalItemByPage);
        
        $pageNow = isset($queryStringPagination) ? $queryStringPagination : 1;
        $initialLimit = ($pageNow - 1) * $totalItemByPage;

        $dataDestinations = $this->model('Destination')->getDataDestinations($initialLimit, $totalItemByPage);
        
        $data['dataDestinations'] = $dataDestinations;
        $data['totalPage'] = $totalPage;
        $data['pageNow'] = $pageNow;
        
        $this->view('components/frontend/header', $data);
        $this->view('components/frontend/navbar', $data);
        
        $this->view('page/frontend/destination', $data);

        $this->view('components/frontend/sidebar', $data);
        $this->view('components/frontend/footer', $data);
        $this->view('components/frontend/script', $data);
    }

    public function show(string $uid)
    {
        $data['title'] = 'Detail Destinasi';
        $data['updateStatus'] = 'destination/updateStatus';
        
        $data['destination'] = $this->model('Destination')->findByUid(uid: $uid);
        
        $data['leaflet'] = true;
        $data['showLeaflet'] = true;
        $data['shareButton'] = true;

        $this->view('components/frontend/header', $data);
        $this->view('components/frontend/navbar', $data);
        
        $this->view('page/frontend/detail-destination', $data);

        $this->view('components/frontend/sidebar', $data);
        $this->view('components/frontend/footer', $data);
        $this->view('components/frontend/script', $data);
        
    }
}
