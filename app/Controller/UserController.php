<?php
namespace App\Controller;
use App\config\Controller as Controller;

class UserController extends Controller {

    public function index()
    {
        echo json_encode(['name'=>'ok']);
    }
}