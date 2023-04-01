<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->urlParse();

        // Cek apakah controller ada 
        if (file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        require '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Cek bila ada method pada object $this->controller
        if ($url[1]) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function urlParse()
    {
        $url = rtrim($_GET['url'], '/');
        $url = explode('/', $url);
        return $url;
    }

}
