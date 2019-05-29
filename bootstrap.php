<?php

// Autoloader de Composer
require_once __DIR__ . '/vendor/autoload.php';

// Connexion à mySQL
App\Database::connect();

session_start();