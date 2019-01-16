<?php
/**
> Error display
 *
 **/

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
> Register the auto loader
> Include auto loader form vendor dir
 *
 **/

require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__."./../app/Route/index.php";

?>
