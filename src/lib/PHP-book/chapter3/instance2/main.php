<?php

require_once('Task1.php');
require_once('TaskSheet.php');

$task1 = new Task1('パスポートの更新', 100);
$task2 = new Task1('食材の買い出し', 50);

$taskSheet = new TaskSheet();

$taskSheet->addTask($task1);
$taskSheet->addTask($task2);

$taskSheet->show();

