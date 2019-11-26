<!-- footer -->

<footer>
<nav>
        <ul>
            <li><a href='index.php'> Accueil </a></li>

            <?php if (isset($_SESSION['login'])) : ?>

                <li><a href='profil.php'> Profil </a></li>
                <li><a href='discussion.php'> Discussion </a></li>

            <?php else : ?>

                <li><a href='inscription.php'> Inscription </a></li>
                <li><a href='connexion.php'> Connexion </a></li>

            <?php endif; ?>
        </ul>
    </nav>
</footer>