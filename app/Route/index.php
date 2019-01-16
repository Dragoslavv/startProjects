<?php
namespace App\Route;
use App\config\Routes;
use App\Controller\homeController;
use App\Controller\UserController;

$routes = new Routes();

$routes->get('index', homeController::class,[]);
$routes->delete('home', homeController::class,[]);
$routes->post('home', homeController::class, []);
$routes->put('home', homeController::class, []);