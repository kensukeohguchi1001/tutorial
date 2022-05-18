<?php

require_once('MemoryGame.php');

$memoryGame = new MemoryGame();

if ($memoryGame->isHit(10, 25) === true) {
    echo 'It is hit' . PHP_EOL;
} else {
    echo 'It is not hit' . PHP_EOL;
}
