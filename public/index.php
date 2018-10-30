<?php

/**
    > Register the auto loader
    > Include auto loader form vendor dir
 *
 **/
require __DIR__.'/../vendor/autoload.php';

/**
 *
 */
$users = new \App\Controller\UsersController();
$user =  new \App\Model\User();
$db = new \App\Database\Config();
