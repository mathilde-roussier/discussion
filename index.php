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

    <main class='intro' id='main'>

    <?php if (isset($_SESSION['login'])) {?>

        <p> A présent tu peux accéder à la page discusion,
            <br> tes amis t'y attendent ☺ </p>
        <figure>
            <img src='img/biere.png' />
        </figure>
        <p> Tu peux également modifier ton profil ! </p>

    <?php } else { ?>

        <p> Tu aimes la nature ? Tu aimes les bières ?
            <br> Cet endroit est fait pour toi ☺ </p>
        <figure>
            <img src='img/biere.png' />
        </figure>
        <p> Inscrits toi vite si ce n'est pas déjà fait ! </p>
        
    <?php } ?>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>