<?php

//conecting custom Router
require 'core/Router.php';
//Conecting custom database written functions
require  'Database/Connection.php';
//Connecting custom Database Query Builder
require 'Database/QueryBuilder.php';

$config = require 'core/config.php';

return  new QueryBuilder(Connection::make($config['database']));