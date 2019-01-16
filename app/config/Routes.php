<?php

namespace App\config;

use App\Requests\Request as Request;


class Routes extends Request {
    private $controller;
    private $view;

    public function get( $view, $controller, $array = [] ){
        $this->view = $view;
        $this->controller = $controller;

        if($this->view === $_GET['url']){
            echo $this->view;

        }

    }
    public function put( $view, $controller, $array = [] ){

    }
    public function post( $view, $controller, $array = [] ){

    }
    public function delete( $view, $controller, $array = [] ){

    }

}
