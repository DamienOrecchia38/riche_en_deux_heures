<?php

require_once __DIR__ . '/../Services/Response.php';

class HomeController
{
    use Response;

    public function index()
    {
        $CoachRepository = new CoachRepository();
        $coach = $CoachRepository->getAll();

        $CourseRepository = new CourseRepository();
        $course = $CourseRepository->getAll();
    
        $viewData = [
            'coach' => $coach,
            'course' => $course
        ];
    
        $this->render('HomeView', $viewData);
    }

    public function pageNotFound()
    {
        $this->render('404 - Page not found !');
    }
}