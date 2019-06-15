<?php

//Conecting all functions written in Functions.php
require  'core/Functions.php';

//Gett Connection and Build a Query Custom
require 'core/bootstrap.php';

$config = require 'core/config.php';

//Connecting Class Task
require 'core/Task.php';

//Variable
$greetings = "Hello:";

//Variables that are read from Querystring
$name = htmlspecialchars($_GET['name']);
$surname = htmlspecialchars($_GET['surname']);

//Asociative Array
$personTraits=[
    'age' => 20,
    'hair' => "Brown",
    'career' => "Student"
];
//Adding new element to array
$personTraits['hobby'] = "Basketball";
//Removing an elment from aray
//unset($personTraits['age']);

//Connection to database
//dd($config['database']);

$db = new QueryBuilder(Connection::make($config['database']));
$tasks = $db->sellectAll('todos','Task');



//Open the view
require 'Views/IndexView.php';

