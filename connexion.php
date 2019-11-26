<?php session_start(); ?>

<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/discussion.css">
</head>

<body>

    <?php include 'include/header.php' ?>

    <main>

        <form method='POST' action='connexion'>

            <article>
                <label> Login </label>
                <input type='text' name='login' required />
            </article>

            <article>
                <label> Mot de passe </label>
                <input type='password' name='password' required />
            </article>

            <input type='submit' name='connexion' value="Connexion" />

        </form>

    </main>

    <?php include 'include/footer.php' ?>
</body>

</html>