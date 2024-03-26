<?php

class UserView {
    public function render($user) {
        echo "<h1>{$user->getFirstname()} {$user->getLastname()}</h1>";
        echo "<p>Email: {$user->getEmail()}</p>";

    }
}