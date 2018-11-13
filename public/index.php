<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
    > Register the auto loader
    > Include auto loader form vendor dir
 *
 **/
$App = require __DIR__.'/../vendor/autoload.php';

$user = new \App\Model\User();

$controller = new \App\Controller\UsersController();
$controller->index();
?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chill">
    <meta name="keywords" content="">
    <title>Chill Projects</title>
<!--->
<?php //$this->assets->output->css; ?>
</head>

<body>
<!--TODO routes -->

<?php


//    $pageName = getPageName(0);
//    $subpageName = getPageName(1);
//
//    if (file_exists($file = '/../resources/views/' . $subpageName . '.php'))
//    {
//        require $file;
//    }
//    else
//    {
//       require_once __DIR__ . '/../resources/views/error/404.php';
//    }

?>
</body>
<?php //$this->assets->output->js; ?>
<html>
