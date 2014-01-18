<?php


if (!isset($_SERVER['HTTP_HOST'])) {
    exit('This script cannot be run from the CLI. Run it from a browser.');
}

//All needed files to start the application
require_once (ROOT . DS . 'config' . DS . 'config.php');
require_once (ROOT . DS . 'config' . DS . 'database.php');
require_once (ROOT . DS . 'library' . DS . 'shared.php');

