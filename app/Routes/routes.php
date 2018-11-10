<?php

Router::group(['middleware' => 'guest'], function () {

    Router::get('/login', ['as' => 'user.auth.index', 'uses' => 'Auth\AuthController@login']);
});