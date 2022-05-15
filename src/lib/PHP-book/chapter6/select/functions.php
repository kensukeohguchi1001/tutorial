<?php

function connect(): PDO
{
    $pdo = new PDO('mysql:host=db; dbname=book_log;', 'book_log', 'pass');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
}

function escape(?string $value)
{
    return htmlspecialchars(strval($value), ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function escapeLIKE(?string $value){
    return preg_replace('/([_%#])/u', '#${1}', $value);
}
