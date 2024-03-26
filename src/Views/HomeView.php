<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/home.css">
    <title>Accueil - Riche en deux heures</title>
</head>

<body>
    <?php include __DIR__ . '/components/header.php'; ?>

    <h1>Liste des coach disponibles :</h1>

    <?php

    echo ('<ul>');

    foreach ($coach as $coach) {
        echo ('<li>' . $coach->getFirstname() . ' ' . $coach->getLastname() . '</li>');
    }

    echo ('</ul>');

    foreach ($course as $course) {
        echo ('<h1>' . $course->getTitle() . '</h1>');
        echo ('<p> Date : ' . $course->getDate() . '</p>');
        echo ('<p> Prix : ' . $course->getPrice() . '</p>');
    }

    ?>
    
    <?php include __DIR__ . '/components/footer.php'; ?>
</body>

</html>