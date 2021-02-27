<?php

require 'vendor/autoload.php';

$database = require 'core/bootstrap.php';

use App\Core\{Router, Request};

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());






//require 'functions.php';
//require 'Task.php';
//
//$pdo = connectToDB();
//
//$tasks = fetchAllTasks($pdo);
//
//var_dump($results[1]->description);
//
//var_dump($tasks[0]->foobar());

// To do Application
//
//To do, Comment, User

//class Tasks {
//    public $description;
//    public $completed = false;
//
//    public function __construct($description) {
//        //automatically triggered on instantiation
//        $this->description = $description;
//    }
//
//    public function complete(){
//        $this->completed = true;
//    }
//
//    public function isComplete() {
//        return $this->completed;
//    }
//}
//
//$tasks = [
//    new Tasks('Go to the store'),
//    new Tasks('Watch TV'),
//    new Tasks('Clean my room')
//    ];
//
//$tasks[0]->complete();
//$tasks = new Tasks('Go to the store'); //new task object
//
//$tasks->complete(); //complete the task
//
//var_dump ($tasks->isComplete());
//
//dd($tasks);

//require 'index.view.php';
//
//$names = [
//        "John",
//    "Daddy",
//    "Baby"
//];
//
//$animals = ["dragon", "giraffe", "hare", "frog"];

//foreach ($names as $name) {
//    echo $name . ', ';
//}

//$person = [ 'age' => 32, 'height' => 52, 'hair' => 'brown' , 'career' => 'web developer'];
//
//$person['name'] = "John";
//
//unset($person['age']);

//var_dump($person);

//die(var_dump($person));

//$task = [
//	'title' => 'Johns Assignment',
//	'due'   => 'today',
//	'assigned_to' => 'John',
//	'completed' => true,
//	'done_well' => true
//	];//title, due, assigned_to, completed



//function clubEntry($under) {
//	return (! $under > 21);
//}

//if (clubEntry(19)) {
//	echo 'You cant come in bro';
//} else {
//	echo 'You may enter';
//}



