<?php

class Room
{
    private int $id;
    private string $number;
    private string $type;
    private float $pricePerNight;
    private array $reservations = [];

    public function __construct(int $id, string $number, string $type, float $pricePerNight)
    {
        $this->id = $id;
        $this->number = $number;
        $this->type = $type;
        $this->pricePerNight = $pricePerNight;
    }

    public function getReservation() {
        return $this->reservations;
    }
    public function getNumber(){
        return $this->number;
    }

    public function getType(){
        return $this->type;
    }

    public function getPricePerNight(){
        return $this->pricePerNight;
    }
    public function addReservation(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }

        public function isAvailable(DateTime $start, DateTime $end): bool {
        foreach ($this->reservations as $reservation) {
            if ($reservation->getStartDate() < $end && $reservation->getEndDate() > $start) {
                return false;
            }
        }
        return true;
    }
}
