<?php

class App
{
    public function __construct(protected $controller = 'Home', protected $method = 'index', protected $params = [])
    {
        session_start();
        $url = $this->parseURL();
        
        if(isset($url[0])) $firstUrl    =  $url[0];
        if(isset($url[1])) $secondUrl   = $url[1];
        if(isset($url[2])) $thirdUrl    = $url[2];
       
        if (isset($firstUrl)) {
            if (file_exists('../app/controllers/' . $firstUrl . 'Controller.php')) {
                $this->controller = $firstUrl;
                unset($url[0]);
            } else {
                http_response_code(404);
                require_once '../app/views/page/errors/maintenance.php';
                die();
            }
        }
        // dd($url);
        $controllerName = ucfirst($this->controller) . 'Controller';
        
        require_once '../app/controllers/' . $controllerName . '.php';
        $controllerName = new $controllerName;

        if (isset($secondUrl)) {
           
            if (method_exists($controllerName, $secondUrl)) {
                $this->method = $secondUrl;
                unset($url[1]);
            }
        }
      
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$controllerName, $this->method], $this->params);
    }

    public function parseURL()
    {
        
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }


}
