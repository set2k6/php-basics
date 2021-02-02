<?php

$router->define([
    $router->get('','controllers/index.php');
    $router->get('about','controllers/about.php');
    $router->get('about/culture','controllers/about-culture.php');
    $router->get('contact-us','controllers/contact.php');
    $router->post('names','controllers/add-name.php');  ///only for POST types
]);

