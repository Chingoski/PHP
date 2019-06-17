<?php

//conecting custom Router
require 'core/Router.php';
require 'App.php';
//Conecting custom database written functions
require  'Database/Connection.php';
//Connecting custom Database Query Builder
require 'Database/QueryBuilder.php';

App::bind('config' , require 'config.php');
App::bind('database' ,$db = new QueryBuilder(Connection::make(App::getItem('config')['database'])));



