<?php

namespace App\config;

use App\Controller;
use App\Requests\Request as Request;


class Routes extends Request {
    private $controller;
    private $view;

    public function get( $view, $controller ){
        $this->view = $view;
        $this->controller = $controller;

        if($this->view === $_GET['url']){
            require_once __DIR__.'/../Controller/' . $this->controller . '.php';
        }

    }
    public function put( $view, $controller ){

    }
    public function post( $view, $controller ){

    }
    public function delete( $view, $controller ){

    }

}
