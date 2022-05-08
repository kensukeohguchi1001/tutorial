<?php

require_once('Task2.php');

$task = new Task2();

$task->setName('パスポートの更新');
echo 'タスク名:' . $task->getName(). PHP_EOL;

$task->setProgress(80);
echo $task->getProgress() . PHP_EOL;

$task->clearProgress();

echo $task->getProgress() . PHP_EOL;

$task->completeProgress();
echo $task->getProgress() . PHP_EOL;
