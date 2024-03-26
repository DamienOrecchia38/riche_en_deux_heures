<?php

function classLoader($className){

    $filePathClass = $className . '.php';

    $folderPathClasses = __DIR__ . '/Classes/';
    $folderPathModels = __DIR__ . '/Models/';
    $folderPathRepositories = __DIR__ . '/Repositories/';
    $folderPathControllers = __DIR__ . '/Controllers/';
    $folderPathViews = __DIR__ . '/Views/';

    if (file_exists($folderPathClasses . $filePathClass)) {
        require $folderPathClasses . $filePathClass;
    }

    if (file_exists($folderPathModels . $filePathClass)) {
        require $folderPathModels . $filePathClass;
    }

    if (file_exists($folderPathRepositories . $filePathClass)) {
        require $folderPathRepositories . $filePathClass;
    }

    if (file_exists($folderPathControllers . $filePathClass)) {
        require $folderPathControllers . $filePathClass;
    }

    if (file_exists($folderPathViews . $filePathClass)) {
        require $folderPathViews . $filePathClass;
    }
}

spl_autoload_register('classLoader');

session_start();

$new_database = new Database();
$new_database->getDb();

require_once __DIR__ . '/router.php';