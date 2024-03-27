<?php

require_once __DIR__ . '/../Services/Response.php';

class AccountController
{
    use Response;

    public function index()
    {
        // $CoachRepository = new CoachRepository();
        // $coach = $CoachRepository->findById();

        // $CourseRepository = new CourseRepository();
        // $course = $CourseRepository->findById();

        $title = "Mon compte";

        $viewData = [
            'title' => $title
        ];

        $this->render('AccountView', $viewData);
    }
}