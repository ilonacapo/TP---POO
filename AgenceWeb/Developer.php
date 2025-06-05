<?php
class Developer {
    private int $id;
    private string $name;
    private array $skills;
    private array $assignedTasks = [];

    public function __construct(int $id, string $name, array $skills) {
        $this->id = $id;
        $this->name = $name;
        $this->skills = $skills;
    }

    public function assignTask(Task $task): void {
        $this->assignedTasks[] = $task;
    }

    public function getWorkload(): int {
        return count($this->assignedTasks);
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSkills(): array {
        return $this->skills;
    }

    public function getAssignedTasks(): array {
        return $this->assignedTasks;
    }
}
?>
