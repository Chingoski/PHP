<?php

$router = new Router();
$router->get('',"controlers/index.php");
$router->get('about',"controlers/about.php");
$router->get('contact',"controlers/contact.php");
$router->post('names',"controlers/add-name.php");

return $router;