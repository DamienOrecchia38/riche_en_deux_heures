<?php

require_once __DIR__ . '/../Services/Response.php';

class LoginController
{
    use Response;

    public function index()
    {
        $title = "Se connecter";

        $viewData = [
            'title' => $title
        ];

        $this->render('LoginView', $viewData);
    }
} 