<?php

require_once('Game.php');

$game = new Game('田中', 2);

$test = $game->start();
var_dump($test);
