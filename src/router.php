<?php

$homeController = new HomeController();
$inscriptionController = new InscriptionController();
$loginController = new LoginController();
$accountController = new AccountController();

$path = $_SERVER['REQUEST_URI'];

switch ($path) {
    case URL_HOMEPAGE:
        $homeController->index();
        break;
    case URL_INSCRIPTION:
        $inscriptionController->index();
        break;
    case URL_LOGIN:
        $loginController->index();
        break;
    case URL_ACCOUNT:
        $accountController->index();
        break;
    default:
        $homeController->pageNotFound();
        break;
}