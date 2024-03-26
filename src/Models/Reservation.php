<?php

class Reservation {
    private $idReservation;
    private $date;
    private $users;
    private $coach;
    private $courseList;

    public function getIdReservation() {
        return $this->idReservation;
    }

    public function getDate() {
        return $this->date;
    }

    public function getUsers() {
        return $this->users;
    }

    public function getCoach() {
        return $this->coach;
    }

    public function getCourseList() {
        return $this->courseList;
    }

    public function setIdReservation($idReservation) {
        $this->idReservation = $idReservation;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setUsers($users) {
        $this->users = $users;
    }

    public function setCoach($coach) {
        $this->coach = $coach;
    }

    public function setCourseList($courseList) {
        $this->courseList = $courseList;
    }
}