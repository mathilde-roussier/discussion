<?php
session_start();

if (isset($_SESSION['login'])) 
{ } 
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

    <main id='chat'>

        <section>
            <article class='discussion'>
                <?php include 'include/traitement_discussion.php' ?>
            </article>

            <form class='commentaire' method='POST' action='discussion.php #chat'>
                <textarea name="commentaire" placeholder='Votre commentaire.. (140 max)' maxlength="140"></textarea>

                <input type='submit' name='validation' value='Envoyer' />

                <?php include 'include/traitement_commentaire.php'; ?>
            </form>
        </section>

    </main>

    <?php include 'include/footer.php' ?>

</body>

</html>