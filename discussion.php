<?php
session_start();

if(isset($_SESSION['login']))
{}
else header('Location:index.php');
?>

<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Discussion</title>
    <link rel="stylesheet" href="css/discussion.css">
</head>

<body>

    <?php include 'include/header.php' ?>

    <main>

        <section>
            <article>
                <?php include 'include/traitement_discussion.php' ?>
            </article>

            <form method='POST' action='discussion.php'>
                <input type="text" name="commentaire" placeholder='Votre commentaire...' />

                <input type='submit' name='validation' value='Envoyer' />

                <?php include 'include/traitement_commentaire.php'; ?>
            </form>
        </section>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>