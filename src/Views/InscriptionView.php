<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/inscription.css">
    <title><?php echo $title; ?></title>
</head>

<body>
    <?php include __DIR__ . '/components/header.php'; ?>

        <div class="form_container">
            <form class="form" method="POST" action="../Classes/Inscription.php" onsubmit="check_form()">

                <div class="input_form">
                    <label for="lastname">Nom *</label>
                    <input type="text" minlength="3" maxlength="30" name="lastname" id="lastname" required>
                </div>

                <div class="input_form">
                    <label for="firstname">Prénom *</label>
                    <input type="firstname" minlength="3" maxlength="30" name="firstname" id="firstname" required>
                </div>

                <div class="input_form">
                    <label for="age">Age *</label>
                    <input type="number" id="age" name="age" min="18" max="100" required />
                </div>

                <div class="input_form">
                    <label for="sex">Sexe *</label>
                    <select id="sex" name="sex" id="sex" required>
                        <option  value="femme">Veuillez choisir..</option>
                        <option value="femme">Femme</option>
                        <option value="homme">Homme</option>
                        <option value="non_specifie">Secret</option>
                    </select>
                </div>

                <div class="input_form">
                    <label for="phone">Numéro de téléphone</label>
                    <input type="phone" minlength="10" maxlength="10" name="phone" id="phone">
                </div>

                <div class="input_form">
                    <label for="email">Adresse mail *</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="input_form">
                    <label for="confirm_email">Confirmation adresse mail *</label>
                    <input type="email" name="confirm_email" id="confirm_email" required>
                </div>

                <input type="submit" value="Valider" id="inscription" class="button" />

            </form>
        </div>

    <?php include __DIR__ . '/components/footer.php'; ?>
    <script src="/./public/script/check_form_inscription.js"></script>
</body>

</html>