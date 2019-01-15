<?php
namespace App\config;


class Controller
{

    public function model($model)
    {
        require_once __DIR__ . '/../Model/' . $model . '.php';

        $namespace = 'App\\Model\\' . $model;

        return new $namespace;
    }

    public function view($view, $data = [])
    {
        require_once __DIR__ . '/../../resources/views/' . $view . '.php';
    }
}