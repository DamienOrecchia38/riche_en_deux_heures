<?php

require_once 'Form.php';
require_once 'Database.php';

if (
    !empty($_POST)
    && isset($_POST['lastname'])
    && isset($_POST['firstname'])
    && isset($_POST['age'])
    && isset($_POST['sex'])
    && isset($_POST['phone'])
    && isset($_POST['email'])
    && isset($_POST['confirm_email'])
) {

    $Lastname = htmlspecialchars($_POST['lastname']);
    $Firstname = htmlspecialchars($_POST['firstname']);
    $Age = htmlspecialchars($_POST['age']);
    $Sex = htmlspecialchars($_POST['sex']);
    $Phone = htmlspecialchars($_POST['phone']);
    $Email = htmlspecialchars($_POST['email']);
    $confirm_email = htmlspecialchars($_POST['confirm_email']);
    
    if ($Email === $confirm_email) {
        $new_Formulaire = new Form($Lastname, $Firstname, $Age, $Sex, $Phone, $Email);
        // $new_Formulaire->setFormulaire($Lastname);
        // $new_Formulaire->setFormulaire($Firstname);
        // $new_Formulaire->setFormulaire($Age);
        // $new_Formulaire->setFormulaire($Sex);
        // $new_Formulaire->setFormulaire($Phone);
        // $new_Formulaire->setFormulaire($Email);
        // $new_Formulaire->save();
        header("Location: ../index.php");
        exit;
    } else {
        header("Location: ../index.php");
        exit;
    }
}