<?php

    $router->get('','PagesController@home');
    $router->get('about','PagesController@about');
    $router->get('contact-us','PagesController@contact');

    $router->get('users','UsersController@index');
    $router->post('users','UsersController@store');

//var_dump($router->routes);

