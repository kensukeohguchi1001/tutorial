<?php

// カードの定義
const HIGH_CARD = 'high card';
const PAIR = 'pair';
const STRAIGHT = 'straight';
const ARRAY_SEPARATE_NUMBER = 2;

const CARDS = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'k', 'A'];

define("CARD_HANDS", (function()
{
    $cardRanks = [];
    foreach (CARDS as $index => $hand) {
        $cardRanks[$hand] = $index;
    }
    return $cardRanks;
})());

function showDown($card11, $card12, $card21, $card22): array
{
    $convertToHands = convertToHands([$card11, $card12, $card21, $card22]);
    $playerHands = array_chunk($convertToHands, ARRAY_SEPARATE_NUMBER);
    $judgementHands = array_map(fn ($playerHand) => judgementHands($playerHand[0], $playerHand[1]), $playerHands);

    var_dump($playerHands);
    return [];
}

function convertToHands(array $cardArray): array
{
    // $convertToHands = substr($cardArray, 1);
    return array_map(function($card) {
    return substr($card, 1, strlen($card) - 1);
    }, $cardArray);
}

// これらの処理をプレイヤー１とプレイヤ２の配列に行いたい
function judgementHands($player1, $player2): array
{
    $name = HIGH_CARD;

    if (true) {
        $name = STRAIGHT;
    } else if (true) {
        $name = PAIR;
    }
    return [];
}

showDown('CK', 'DJ', 'C10', 'H10');

// コンバートしたカードの配列をplayer1とplayer2にわける
// それぞれのカードの役の判定を行なっていく
//
