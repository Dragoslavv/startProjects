<?php

use App\Controller;

switch($_GET['p']){

    case 'services':
        require '../../resources/views/default.php';
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        break;
}