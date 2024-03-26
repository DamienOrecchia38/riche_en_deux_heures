<?php

require_once __DIR__ . '/../Services/Response.php';

class InscriptionController
{
    use Response;

    public function index()
    {
        $title = "Inscription";

        $viewData = [
            'title' => $title
        ];

        $this->render('InscriptionView', $viewData);
    }
}