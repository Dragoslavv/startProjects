<?php
namespace App\Controller;

use App\Database\DB as DB;

class Controller extends DB{

    public static function get($viewName) {
        if(file_exists(__DIR__."/../../resources/views/".$viewName.".php")){
            require_once(__DIR__."/../../resources/views/".$viewName.".php");
            static::something();

        } else {

            require_once(__DIR__."/../../resources/views/error/404.php");
        }
    }
}