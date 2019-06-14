<?php

$router = new Router();

$router -> define([
'' => "controlers/index.php",
'about' => 'controlers/about.php',
'contact' => 'controlers/contact.php'
]);

return $router;