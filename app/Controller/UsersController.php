<?php
namespace App\Controller;
use App\Model;
use App\Controller\Controller as Controller;

class UsersController extends Controller {

    public static function something(){
       $d = new Model\User();
        $d->all_users();
    }
    function create(){
        //ToDo
    }
    function edit(){
        //ToDo
    }
    function save(){
        //ToDo
    }
    function store(){
        //ToDo
    }
    function update(){
        //ToDo
    }
    function destroy(){
        //ToDo
    }
}
