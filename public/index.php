<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
> Register the auto loader
> Include auto loader form vendor dir
 *
 **/
$App = require __DIR__.'/../vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chill">
    <meta name="keywords" content="">
    <title>Test for Vivify ideas | Travel & Avio</title>
    <!--->
    <!-- Favicons -->
    <link href="favicon.ico" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="./assets/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="./assets/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link type="text/css" rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
<div class="container">

    <header class="inform">
        <div class="top-section-grey">
            <a href="https://www.linkedin.com/in/dragoslav-predojevic-15453914b/" target="blank" class="social3 social-icons" title="Dragoslav Predojevic LinkedIn" id="Intens_LinkedIn"></a>
            <a href="https://www.facebook.com/dragoslav.predojevic" target="blank" class="social2 social-icons" title="Dragoslav Predojevic Facebook" id="Intens_Facebook"></a>
            <a href="https://twitter.com/" target="blank" class="social1 social-icons" title="Dragoslav Predojevic Twitter" id="Intens_Twitter"></a>
        </div>
        <div class="top-section-orange">
            <span class="phone-icon all-orange"></span>
            <span class="phone-text all-orange"> + 381 69 50 13 001</span>
            <a href="mailto:gagi.predojevic93@hotmail.com" class="mail-icon all-orange" title="E-mail us" id="E-mail_us"></a>
            <a href="mailto:gagi.predojevic93@hotmail.com" class="mail-text all-orange" title="E-mail us" id="E-mail_us">gagi.predojevic93@hotmail.com</a>
        </div>
    </header>

    <div class="box box-shadow mb-4">
        <section id="homePage">
            <div class="container">
                <div class="section-header">
                    <h2 class="text-center p-3">Test for Vivify ideas | Travel & Avio</h2>
                </div>
                <div class="box box-shadow p-3">
                    <?php

                    if(file_exists('classes/Route.php')){
                        require_once "classes/Route.php";
                    }else if( file_exists('../app/Controller/ViewController.php') ){
                        require_once "../app/Controller/ViewController.php";
                    }

                    require_once '../app/Routes/routes.php';

                    ?>
                </div>

            </div>
        </section>
    </div>
    <!--footer starts from here-->
    <footer class="footer">

        <div class="container">
            <!--foote_bottom_ul_amrc ends here-->
            <p class="text-center">Copyright @ <script> document.write(new Date().getFullYear()); </script> | Author: Dragoslav Predojevic</p>

            <ul class="social_footer_ul">
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>

    </footer>

</div>
</body>
<!-- JavaScript Libraries -->
<script src="./assets/jquery/jquery.min.js" type="text/javascript"></script>
<script src="./assets/jquery/jquery-migrate.min.js" type="text/javascript"></script>
<script src="./assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="./assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<!-- Template Main Javascript File -->
<script src="assets/script/script.js" type="text/javascript"></script>

<?php //$this->assets->output->js; ?>
<html>