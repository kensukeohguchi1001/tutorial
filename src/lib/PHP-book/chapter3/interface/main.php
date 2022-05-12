<?php

require_once('Airplane.php');
require_once('Bird.php');
require_once('Sky.php');

$sky = new Sky();

$bird = new Bird();
$sky->draw($bird);

$airplane = new Airplane();
$sky->draw($airplane);
