<?php
session_start();

use App\Application\App;
use App\Application\Database;
use App\Controllers\MigrationController;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();


$app = new App();
$c = $app->createContainer();

$c->add('db', new Database());

$app->get('/migrate', MigrationController::class, "migrate");

$app->run();


