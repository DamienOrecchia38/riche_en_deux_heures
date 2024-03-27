<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/home.css">
    <title>Accueil - Riche en deux heures</title>
</head>

<body>
    <?php include __DIR__ . '/components/header.php'; ?>

    <h1>Liste des formations disponibles :</h1>

    <div class="container">
        <?php
            foreach ($coach as $coachIndividual) {
                foreach ($course as $courseItem) {
                    echo ('<div class="card rgb">');
                    echo ('<div class="card-image card3"></div>');
                    echo ('<div class="card-text card3">');
                    echo ('<span class="date">' . $courseItem->getDate() . '</span>');
                    echo ('<h2>' . $courseItem->getTitle() . '</h2>');
                    echo ('<p>Prix : ' . $courseItem->getPrice() . ' € ' . $coachIndividual->getFirstname() . ' ' . $coachIndividual->getLastname() . '</p>');
                    echo ('</div>');
                    echo ('</div>');
                }
            }
        ?>
    </div>

    <script src="vanilla-tilt.min.js"></script>

    <script>
      VanillaTilt.init(document.querySelectorAll(".card"),{
        glare: true,
        reverse: true,
        "max-glare": 0.15
      });
    </script>

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>

</html>