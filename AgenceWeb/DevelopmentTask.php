<?php
class DevelopmentTask extends Task implements Billable {
    private float $estimatedHours;

    public function __construct(int $id, string $title, Developer $assignedTo, float $estimatedHours) {
        parent::__construct($id, $title, $assignedTo);
        $this->estimatedHours = $estimatedHours;
    }

    public function calculateCost(): float {
        return $this->estimatedHours * 50;
    }

    public function getEstimatedHours(): float {
    return $this->estimatedHours;
}

}
?>
