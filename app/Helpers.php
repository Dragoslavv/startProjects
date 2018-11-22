<?php

function subDomain(){
    if(isset($_SERVER['HTTP_HOST'])){
        return explode('.', $_SERVER['HTTP_HOST'])[0];
    }
    return true;
}

