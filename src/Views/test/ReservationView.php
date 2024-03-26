<?php

class ReservationView {
    public function render($reservation) {
        echo "<h1>Reservation ID: {$reservation->getIdReservation()}</h1>";
        echo "<p>Date: {$reservation->getDate()}</p>";

    }
}