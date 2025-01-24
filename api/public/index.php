<?php
require __DIR__.'/../app/core/Router.php';

$router = new Router();
$uri = $_SERVER['REQUEST_URI'];
$router->match($uri);

?>