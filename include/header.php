<!-- Header -->

<header>
    <nav>

        <aside>
            <img src='img/beer.png' />
            <h1> The bar <br> into the forest </h1>
        </aside>

        <ul>
            <li><a href='index.php'> Accueil </a></li>

            <?php if (isset($_SESSION['login'])) : ?>

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

            <?php else : ?>

                <li><a href='inscription.php'> Inscription </a></li>
                <li><a href='connexion.php'> Connexion </a></li>

            <?php endif; ?>
        </ul>
    </nav>
</header>