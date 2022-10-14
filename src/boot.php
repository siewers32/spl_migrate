<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';

if(!isset($_ENV)) {
    $dotenv = Dotenv\Dotenv::createImmutable('../');
    $dotenv->load();
}