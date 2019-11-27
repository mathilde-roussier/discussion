<?php session_start(); ?>

<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Site de Mathilde</title>
    <link rel="stylesheet" href="css/discussion.css">
</head>

<body>

    <?php include 'include/header.php' ?>

    <main>

        <?php if (isset($_SESSION['login'])) : ?>
            <p> Salut <?php echo $_SESSION['login']." !"; ?>,<br> Bienvenue au bar clandestin "La plateforme" !</p>
        <?php else : ?>
            <p> Salut toi,<br> Bienvenue au bar clandestin "La plateforme" !</p>
        <?php endif; ?>
        
    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>