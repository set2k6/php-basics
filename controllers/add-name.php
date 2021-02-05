<?php

$app['database']->insert('users',[
    'name'=>$_POST['name']
]);

header('location: /');
//var_dump('You typed ' . $_POST['name']);