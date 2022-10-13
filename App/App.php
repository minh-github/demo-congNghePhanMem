<?php

class App{

    private $__controller, $__action, $__params, $__routes;

    function __construct()
    {
        global $routes, $config, $db;
        
        $this-> __routes = new Route();

        $this->__controller = $routes['default_controller'];
        $this->__action = 'index';
        $this->__params = [];
        
        $this->handelURL();

    }

    public function getURL()
    {
        if(!empty($_SERVER['REQUEST_URI'])){
            $url = $_SERVER['REQUEST_URI'];
        }else{
            $url = '/';
        }
        return $url;
    }

    public function handelURL()
    {
     $url = $this->getURL();

     $newUrl = $this->__routes->handelRoute($url);

     $urlArr = array_values(array_filter( explode('/',$newUrl)));


    
        //xử lí controller

        if(!empty($urlArr[0])){
        $this->__controller = ucfirst( $urlArr[0]);
        }
        else{
            $this->__controller = ucfirst($this->__controller);
        }
        if(file_exists('App/controllers/'.($this->__controller).'.php')){
            require_once 'controllers/'.($this->__controller).'.php';
            $this->__controller = new $this->__controller;
            unset($urlArr[0]);
        }
        else{
            $this->loadErr();
        }
        //xử lí action
        if(!empty($urlArr[1])){
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        //xử lí params
        $this->__params = array_values($urlArr);

        if(method_exists($this->__controller,$this->__action)){
            call_user_func_array([$this->__controller,$this->__action],$this->__params);
        }else{
            $this->loadErr();
        }

            
    }

    public function loadErr($name = '404')
    {
        require_once 'views/errors/'.($name).'.php';
    }
}