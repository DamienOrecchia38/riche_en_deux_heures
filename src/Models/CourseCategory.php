<?php

class CourseCategory {
    private $idCourseCategory;
    private $course;
    private $category;

    public function getIdCourseCategory() {
        return $this->idCourseCategory;
    }

    public function getCourse() {
        return $this->course;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setIdCourseCategory($idCourseCategory) {
        $this->idCourseCategory = $idCourseCategory;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function setCategory($category) {
        $this->category = $category;
    }
}