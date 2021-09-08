<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

include "./vendor/autoload.php";

require_once "./routes.php";

use Pecee\SimpleRouter\SimpleRouter;

//SimpleRouter::setDefaultNamespace('\Demo\Controllers');
SimpleRouter::start();