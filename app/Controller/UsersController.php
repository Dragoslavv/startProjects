<?php
namespace App\Controller;
use App\Model;

class UsersController{

    function __construct(){
        $this->User  = new Model\User();
    }

    function index(){
        $this->User->all_users();
    }
    function create(){

    }
    function edit(){

    }
    function save(){

    }
    function store(){

    }
    function update(){

    }
    function destroy(){

    }
}
