<?php
class Reservation implements Billable {
    private int $id;
    private Room $room;
    private Customer $customer;
    private DateTime $startDate;
    private DateTime $endDate;
    private string $status;

    public function __construct(int $id, Room $room, Customer $customer, DateTime $start, DateTime $end) {
        $this->id = $id;
        $this->room = $room;
        $this->customer = $customer;
        $this->startDate = $start;
        $this->endDate = $end;
        $this->status = "pending";
    }

    public function getStartDate(){
        return $this->startDate;
    }

    public function getEndDate(){
        return $this->endDate;
    }

        public function getDurationInNights() {
        $duration = $this->startDate->diff($this->endDate);
        $durationInDays = $duration->days;
        return $durationInDays;
    }

    

    public function calculateAmount(): float {
        $nights = $this->getDurationInNights();
        return $nights * $this->room->getPricePerNight();
    }

    public function cancel() {
        $this->status = "canceled";
    }


}
?>
