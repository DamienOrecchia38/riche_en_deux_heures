<?php

require_once 'Form.php';
require_once 'Database.php';

if (
    !empty($_POST)
    && isset($_POST['lastname'])
    && isset($_POST['firstname'])
    && isset($_POST['email'])
    && isset($_POST['confirm_email'])
) {

    $Lastname = htmlspecialchars($_POST['lastname']);
    $Firstname = htmlspecialchars($_POST['firstname']);
    $Email = htmlspecialchars($_POST['email']);
    $confirm_email = htmlspecialchars($_POST['confirm_email']);
    
    if ($Email === $confirm_email) {
        $new_Formulaire = new Form($Lastname, $Firstname, $Email);
        // $new_Formulaire->setFormulaire($Lastname);
        // $new_Formulaire->setFormulaire($Firstname);
        // $new_Formulaire->setFormulaire($Email);
        // $new_Formulaire->save();
        header("Location: ../index.php");
        exit;
    } else {
        header("Location: ../index.php");
        exit;
    }
}