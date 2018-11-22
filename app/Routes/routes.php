<?php

Route::set('index.php',function (){
    \App\Controller\HomeController::get('index');
});

Route::set('avioTravel',function (){
   \App\Controller\ViewController::get('avioTravel');
});
Route::set('users',function (){
    \App\Controller\UsersController::get('users');
});