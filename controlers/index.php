<?php

$tasks = $db->sellectAll('todos','Task');

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

//Open the view
require 'Views/IndexView.php';