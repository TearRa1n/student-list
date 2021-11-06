<?php

use App\Kernel;

ini_set('display_errors', 1);
error_reporting(E_ALL);

define("ROOT", dirname(__DIR__));

require_once(ROOT . '/vendor/autoload.php');

new Kernel();


