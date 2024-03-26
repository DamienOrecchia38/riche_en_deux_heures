<?php

require_once __DIR__ . '/../Services/Response.php';

class AccountController
{
    use Response;

    public function index()
    {
        $title = "Mon compte";

        $viewData = [
            'title' => $title
        ];

        $this->render('AccountView', $viewData);
    }
}