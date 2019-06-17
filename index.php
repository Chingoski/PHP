<?php

//Conecting all functions written in Functions.php
require  'core/Functions.php';
require  'core/bootstrap.php';

$router = require 'Views/routes.php';

$uri = trim($_SERVER['REQUEST_URI'],'/');

$method = $_SERVER['REQUEST_METHOD'];


require $router->direct($uri,$method);

//require 'controlers/index.php';



