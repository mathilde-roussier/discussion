<!-- Header -->

<nav>

    <aside>
        <img src='img/beer.png' />
        <h1> The bar <br> into the forest </h1>
    </aside>

    <ul>
        <li><a href='index.php'> Accueil </a></li>

        <?php if (isset($_SESSION['login'])) { ?>

            <li><a href='profil.php'> Profil </a></li>
            <li><a href='discussion.php'> Discussion </a></li>
            <li>
                <form action='index.php' method='POST'>
                    <input type='submit' name='deconnexion' value='Deconnexion' />
                    <?php if (isset($_POST['deconnexion'])) {
                            session_destroy();
                            header('Location:index.php');
                        }
                        ?>
                </form>
            </li>

        <?php } else { ?>

            <li><a href='inscription.php'> Inscription </a></li>
            <li><a href='connexion.php'> Connexion </a></li>

        <?php } ?>
    </ul>
</nav>

<header>

    <?php

    if (!empty(strstr($_SERVER['REQUEST_URI'], 'index.php'))) {
        if (isset($_SESSION['login'])) { ?>
            <p> Salut <?php echo $_SESSION['login']; ?>,<br> Bienvenue dans "The bar into the forest" !</p>
        <?php } else { ?>
            <p> Salut toi,<br> Bienvenue dans "The bar into the forest" !</p>
        <?php }
        } elseif (!empty(strstr($_SERVER['REQUEST_URI'], 'discussion.php'))) {
            ?>
        <p><?php echo $_SESSION['login']; ?>,<br> tu te trouves actuellement sur la page Discussion !</p>
    <?php
    } elseif (!empty(strstr($_SERVER['REQUEST_URI'], 'profil.php'))) {
        ?>
        <p><?php echo $_SESSION['login']; ?>,<br> tu te trouves actuellement sur ta page profil !</p>


    <?php } elseif (!empty(strstr($_SERVER['REQUEST_URI'], 'inscription.php'))) {
        ?>
        <p> Chouette ! <br> Tu as décidé de t'inscrire :) </p>
    <?php } elseif (!empty(strstr($_SERVER['REQUEST_URI'], 'connexion.php'))) {
        ?>
        <p> Maintenant, <br> connectes toi !</p>
    <?php } ?>

</header>