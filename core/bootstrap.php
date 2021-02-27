<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = []){
    extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path){
    header('Location /{$path}');
}
//$app = [];
//
//$app['config'] = require 'config.php';


//$config = require 'config.php';

//require 'core/database/Connection.php';
//require 'core/database/QueryBuilder.php';
//require 'core/Request.php';
//require 'core/Router.php';


//$app['database'] = new QueryBuilder(
//    Connection::make($app['config']['database'])
//);