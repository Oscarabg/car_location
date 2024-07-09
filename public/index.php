<?php

// require_once '../src/Entity/Test.php';
require_once '../src/Core/Autoloader.php';
// use App\Entity\Test;
use App\Core\Autoloader;
use App\Core\Router;

Autoloader::autoload();

// $test = new Test();
// echo $test->display();
echo '<br>';

$router = new Router();
$router->execute();
