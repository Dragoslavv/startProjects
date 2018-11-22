<?php
namespace App\Controller;
use App\Model;
use App\Controller\Controller as Controller;

class ViewController extends Controller {

    public static function something(){
        $d = new Model\View();
        $d->all_view();
    }

}