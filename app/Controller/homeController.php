<?php
namespace App\Controller;
use App\Model\User;

use App\config\Controller as Controller;

class homeController extends Controller {

    public function index($name = ''){

        $user = $this->model('User');
        $user->name = $name;

        $this->view('index', ['name' => $user->name] );

    }

}