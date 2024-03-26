<?php

class CategoryView {
    public function render($category) {
        echo "<h1>{$category->getName()}</h1>";

    }
}