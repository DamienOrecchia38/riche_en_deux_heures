<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/inscription.css">
    <link rel="stylesheet" href="../../public/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
</head>

<body>
    <?php include __DIR__ . '/components/header.php'; ?>

        <div class="form_container login">
            <h1 class="element">Inscription</h1>
            <form class="form" method="POST" action="../Classes/Inscription.php" onsubmit="check_form()">

                <div class="input_form element">
                    <input type="text" minlength="3" maxlength="30" name="lastname" placeholder="Nom" id="lastname" required>
                </div>

                <div class="input_form element">
                    <input type="firstname" minlength="3" maxlength="30" name="firstname" placeholder="Prénom" id="firstname" required>
                </div>

                <div class="input_form element">
                    <input type="email" name="email" placeholder="Email" id="Email" required>
                </div>

                <div class="input_form element">
                    <input type="email" name="confirm_email" placeholder="Confirmation de l'Email" id="confirm_email" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-large">Valider</button>

            </form>
        </div>

    <?php include __DIR__ . '/components/footer.php'; ?>
    <script src="/./public/script/check_form_inscription.js"></script>
</body>

</html>