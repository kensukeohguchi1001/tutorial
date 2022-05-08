<?php

require_once('Task1.php');

class TaskSheet
{
    public array $tasks = [];

    public function addTask(Task1 $task): void
    {
        $this->tasks[] = $task;
        echo $task->getName().'を追加しました'. PHP_EOL;
    }

    public function show(): void
    {
        foreach ($this->tasks as $task) {
            if ($task->isCompleted() === true) {
                echo $task->getName() . 'は完了しました' . PHP_EOL;
            } else {
                echo $task->getName() . 'は完了していません' . PHP_EOL;
            }
        }
    }

}
