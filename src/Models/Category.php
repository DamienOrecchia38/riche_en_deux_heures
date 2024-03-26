<?php

class Category {
    private $idCategory;
    private $name;
    private $courseCategoryList;

    public function getIdCategory() {
        return $this->idCategory;
    }

    public function getName() {
        return $this->name;
    }

    public function getCourseCategoryList() {
        return $this->courseCategoryList;
    }

    public function setIdCategory($idCategory) {
        $this->idCategory = $idCategory;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCourseCategoryList($courseCategoryList) {
        $this->courseCategoryList = $courseCategoryList;
    }
}