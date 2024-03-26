<?php

class Coach {
    private $idCoach;
    private $firstname;
    private $lastname;
    private $reservationList;

    public function getIdCoach() {
        return $this->idCoach;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getReservationList() {
        return $this->reservationList;
    }

    public function setIdCoach($idCoach) {
        $this->idCoach = $idCoach;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setReservationList($reservationList) {
        $this->reservationList = $reservationList;
    }
}