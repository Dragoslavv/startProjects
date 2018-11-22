<?php
namespace App\Controller;
use App\Model;
use App\Controller\Controller as Controller;

class HomeController extends Controller {

    public static function something(){
        $d = new Model\Home();
        $d->all_home();

    }
    public function create() {
        //Todo
    }

}