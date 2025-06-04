<?php
include_once 'Room.php';
include 'Billable.php';
include_once 'Customer.php';
include_once 'Reservation.php';
include_once 'ExceptionResa.php';

$rooms = [
    new Room(1, "489", "suite", 200),
    new Room(2, "784", "simple", 87),
    new Room(3, "787", "simple", 84),
    new Room(4, "475", "double", 150),
    new Room(5, "485", "suite", 400),
];

$customers = [
    new Customer(1, "John", "john@doe.com"),
    new Customer(2, "Alex", "alex@endrie.com"),
    new Customer(3, "Connie", "connie@Adam.com"),
];

$reservations = [
    new Reservation(1, $rooms[0], $customers[0], new DateTime('1999-10-4'), new DateTime('1999-12-01')),
    new Reservation(2, $rooms[2], $customers[1], new DateTime('1999-10-2'), new DateTime('1999-11-01')),
];

try {
    $conflitTest = new Reservation(3, $rooms[0], $customers[2], new DateTime('1999-10-4'), new DateTime('1999-12-01'));
    $rooms[0]->addReservation($conflitTest);
} catch (ReservationConflictException) {
    echo $e->getMessage();
}
$revenue = 0;
foreach ($reservations as $reservation) {
    if ($reservation->getStartDate()->format('Y-m') === "1999-10") {
        $revenue += $reservation->calculateAmount();
    }
}

echo "Le chiffre d'affaire en Octobre est: $revenue";


$start = new DateTime('1999-10-12');
$end = new DateTime('1999-11-1');

foreach ($rooms as $room) {
    if ($room->isAvailable($start, $end)) {
        echo "La chambre {$room->getNumber()} ({$room->getType()}) est dispo\n";
    }
}