<?php

require_once('Game.php');

$game1 = new Game(['CA', 'DA'], ['C9', 'H10']);
$game1->start();

$game2 = new Game(['C2', 'D2', 'S2'], ['C10', 'H9', 'DJ']);
$game2->start();

