<?php

require_once 'main.php';
require_once 'show.php';
require_once 'number.php';
require_once 'calculate.php';


$main = new main;
$resultado = $main->runChallenge(1,100);

$message = new show;
$message->showMessage($resultado);


?>