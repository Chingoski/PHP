<?php

//Conecting all functions written in Functions.php
require  'core/Functions.php';

$db = require  'core/bootstrap.php';

$router = require 'Public/routes.php';

$uri = trim($_SERVER['REQUEST_URI'],'/');

require $router->direct('contact');




