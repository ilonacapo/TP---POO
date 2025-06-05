<?php

class Project {
    private int $id;
    private string $name;
    private string $clientName;
    private DateTime $startDate;
    private ?DateTime $endDate;
    private array $tasks = [];

    public function __construct(int $id, string $name, string $clientName, DateTime $startDate, ?DateTime $endDate = null) {
        $this->id = $id;
        $this->name = $name;
        $this->clientName = $clientName;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function addTask(Task $task): void {
        $this->tasks[] = $task;
    }

    public function getProgress(): float {
        $nbCompleted = 0;
        $nbTasks = count($this->tasks);
        
        if ($nbTasks === 0) {
            return 0;
        }

        foreach ($this->tasks as $task) {
            $nbCompleted += (int) $task->isCompleted();
        }

        return ($nbCompleted / $nbTasks) * 100;
    }

    public function getTasks(): array {
        return $this->tasks;
    }

    public function getEndDate(): ?DateTime {
        return $this->endDate;
    }
}
?>
