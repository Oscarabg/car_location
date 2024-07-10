<?php

require_once '../src/Core/Autoloader.php';
require_once '../config/env.php';


echo DIR_PATH;

use App\Core\Autoloader;
use App\Core\Database;

use App\Core\Router;

Autoloader::autoload();
Database::initConnection();

// $pdo = Database::getConnexion();

echo '<br>';

$router = new Router();
$router->execute();
