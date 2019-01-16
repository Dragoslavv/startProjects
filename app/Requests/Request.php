<?php
namespace App\Requests;

use App\config\Controller;
use App\Model;


class Request {
    public function __construct() {

        if($_GET['url'] != "" ) {

            require __DIR__.'./../../resources/views/'.$_GET['url'].'.php';

        } else {

            require __DIR__.'./../../resources/error/404.php';

        }


    }
}