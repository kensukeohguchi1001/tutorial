<?php

require_once('MemoryGame.php');
require_once('AnimalCard.php');
require_once('PlayingCard.php');

$cardType = 'animalCards';

if ($cardType === 'animalCards') {
    $playingCards = new AnimalCard();
} elseif ($cardType === 'playingCards') {
    $playingCards = new PlayingCard();
}

$memoryGame = new MemoryGame($playingCards);

if ($memoryGame->isHit(10, 25) === true) {
    echo 'It is hit' . PHP_EOL;
} else {
    echo 'It is not hit' . PHP_EOL;
}
