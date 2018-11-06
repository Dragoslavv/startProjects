<?php

/**
    > Register the auto loader
    > Include auto loader form vendor dir
 *
 **/
require __DIR__.'/../vendor/autoload.php';

$user = new \App\Model\User();
new \App\Controller\UsersController();
