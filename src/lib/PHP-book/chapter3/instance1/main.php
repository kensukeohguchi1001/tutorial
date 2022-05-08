<?php

require_once('Task.php');

$task1 = new Task('パスポートの更新', 100);

if ($task1->isCompleted() === true) {
    echo $task1->getName().'は完了しました'. PHP_EOL;
  } else {
    echo $task1->getName(). 'は完了していません' . PHP_EOL;
}
