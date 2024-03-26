<?php

class Course {
    private $idCourse;
    private $title;
    private $date;
    private $price;
    private $reservation;
    private $courseCategoryList;

    public function getIdCourse() {
        return $this->idCourse;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDate() {
        return $this->date;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getReservation() {
        return $this->reservation;
    }

    public function getCourseCategoryList() {
        return $this->courseCategoryList;
    }

    public function setIdCourse($idCourse) {
        $this->idCourse = $idCourse;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setReservation($reservation) {
        $this->reservation = $reservation;
    }

    public function setCourseCategoryList($courseCategoryList) {
        $this->courseCategoryList = $courseCategoryList;
    }
}