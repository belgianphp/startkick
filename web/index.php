<?php

define('BELGIAN_PATH_VIEW', '../app/view/');

require '../vendor/autoload.php';



$app = new Belgian\Mvc\App('App.Controller');
$app->run();

