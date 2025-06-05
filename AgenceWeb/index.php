<?php
include_once 'Developer.php';
include_once 'Task.php';
include_once 'Billable.php';
include_once 'Project.php';
include_once 'DevelopmentTask.php';
include_once 'DesignTask.php';
include_once 'ExceptionTask.php';

$dev1 = new Developer(0, "John", ["Python", "C", "Java"]);
$dev2 = new Developer(1, "Thomas", ["Html", "Css", "Javascript"]);

$proj1 = new Project(0, "SecretTopSecret", "Michael", new DateTime('2025-10-10'));
$proj2 = new Project(1, "Confidentiel", "Sarah", new DateTime('2025-10-10'));

$task1 = new DevelopmentTask(0, "Écrire code", $dev1, 5);
$task2 = new DevelopmentTask(1, "Corriger", $dev1, 10);
$task3 = new DesignTask(0, "Designer", $dev2, "Figma");

$proj1->addTask($task1);
$proj1->addTask($task2);
$proj2->addTask($task3);

try {
    $task1->completeTask();
    $task1->completeTask();
} catch (TaskAlreadyCompletedException $e) {
    echo  $e->getMessage() . "\n";
}

echo "Le projet 1 est terminé à " . $proj1->getProgress() . "%\n";
echo "Le projet 2 est terminé à " . $proj2->getProgress() . "%\n";

$totalCost = $task1->calculateCost() + $task2->calculateCost();
echo "Coût total des tâches de développement : " . $totalCost . "€\n";
?>
