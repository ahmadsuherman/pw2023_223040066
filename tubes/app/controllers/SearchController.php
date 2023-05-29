<?php

class SearchController extends Controller
{

    public function index()
    {
        $url                    = BASE_URL . $_SERVER['REQUEST_URI'];
        $parseUrl               = parse_url($url);
        $parseUrlQuery          = isset($parseUrl['query']) ? $parseUrl['query'] : 's=';
        $getQueryStringSearch   = str_replace("s=","",$parseUrlQuery);
        $keyword                = str_replace("+"," ",$getQueryStringSearch);
       
        $data['title'] = 'Cari Destinasi';
        $data['parsley'] = true;
        
        $data['destinations'] = $this->model('Destination')->getSearchDestinations(keyword: $keyword);
                
        $this->view('components/frontend/header', $data);
        $this->view('components/frontend/navbar', $data);
        
        $this->view('page/frontend/search', $data);

        $this->view('components/frontend/sidebar', $data);
        $this->view('components/frontend/footer', $data);
        $this->view('components/frontend/script', $data);
        
    }
}
