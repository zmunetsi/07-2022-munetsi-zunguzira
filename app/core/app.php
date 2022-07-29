<?php

class App{

    protected $controller = 'HomeController';
    protected $method     = 'index';
    protected $params      = [];

    public function __construct (){

        $url = $this->parseUrl();
        // check if controller exists
 
        if (file_exists('../app/controllers/' . $url[0] . 'Controller.php')){
            $this->controller = $url[0] . 'Controller';
            unset($url[0]);
        }
        // require the controller
        require_once '../app/controllers/' . $this->controller . '.php';
        // check if method exists

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];
        // call the method
        call_user_func_array([new $this->controller, $this->method], $this->params);

    }

    protected function parseUrl (){
        if(isset($_GET['url'])){
            $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            return $url;
        }


    }
}