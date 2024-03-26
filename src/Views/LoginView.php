<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
</head>

<body>
    <?php include __DIR__ . '/components/header.php'; ?>

    <div class="login">
    <h1 class="element">Login</h1>
        <form method="post">
            <input type="text" name="u" placeholder="Nom d'utilisateur" required="required" class="element" />
            <input type="password" name="p" placeholder="Mot de passe" required="required" class="element" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Se connecter</button>
        </form>
    </div>

    <?php include __DIR__ . '/components/footer.php'; ?>
</body>

</html>