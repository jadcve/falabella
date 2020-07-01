<?php

namespace Falabella;

require '../vendor/autoload.php';



$main = new main;
$resultado = $main->runChallenge(1,100);

$message = new show;
$message->showMessage($resultado);
