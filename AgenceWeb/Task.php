<?php

abstract class Task {
    private int $id;
    private string $title;
    private Developer $assignedTo;
    private bool $isCompleted = false;

    public function __construct(int $id, string $title, Developer $assignedTo) {
        $this->id = $id;
        $this->title = $title;
        $this->assignedTo = $assignedTo;
    }

    public function completeTask(): void {
        if ($this->isCompleted) {
            throw new TaskAlreadyCompletedException("La tâche '{$this->title}' est déjà faite.");
        }
        $this->isCompleted = true;
    }

    public function isCompleted(): bool {
        return $this->isCompleted;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAssignedTo(): Developer {
        return $this->assignedTo;
    }
}
?>
