<?php
namespace App\Requests;

use App\config\Controller;
use App\Model;


class Request {
    public function __construct() {

        if($_GET['url'] != "" && $_GET['url'] !== file_exists('./../../resources/views/'.$_GET['url'].'.php')) {

            require __DIR__.'./../../resources/views/'.$_GET['url'].'.php';

        } else {

            require __DIR__.'./../../resources/error/404.php';

        }


    }
}