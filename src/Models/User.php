<?php

class User {
    private $idUser;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $reservationList;

    public function getIdUser() {
        return $this->idUser;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getReservationList() {
        return $this->reservationList;
    }


    public function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setReservationList($reservationList) {
        $this->reservationList = $reservationList;
    }
}