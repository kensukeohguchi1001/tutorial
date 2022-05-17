<?php

require_once dirname(__FILE__) . '/MemoryGame.php';

$memoryGame = new MemoryGame();

if ($memoryGame->isHit(10, 25) === true) {
    echo 'It is hit' . PHP_EOL;
} else {
    echo 'It is not hit' . PHP_EOL;
}
