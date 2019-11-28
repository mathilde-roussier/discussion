<?php 
session_start(); 

if(!isset($_SESSION['login']))
{}
else header('Location:index.php');
?>

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

        <form method='POST' action='connexion.php'>

            <article>
                <label> Login </label>
                <input type='text' name='login' required />
            </article>

            <article>
                <label> Mot de passe </label>
                <input type='password' name='password' required />
            </article>

            <input type='submit' name='connexion' value="Connexion" />

            <?php include 'include/traitement_connexion.php' ?>

        </form>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>