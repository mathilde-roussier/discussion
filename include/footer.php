<!-- footer -->

<footer>
    <nav>
        <ul>
            <li><a href='index.php'> Accueil </a></li>

            <?php if (isset($_SESSION['login'])) : ?>

                <li><a href='profil.php'> Profil </a></li>
                <li><a href='discussion.php'> Discussion </a></li>
                <li><a href='include/deconnexion.php'> Déconnexion </a></li>

            <?php else : ?>

                <li><a href='inscription.php'> Inscription </a></li>
                <li><a href='connexion.php'> Connexion </a></li>

            <?php endif; ?>
        </ul>

        <aside>
            <p>Copyright 2019 Coding School | All Rights Reserved | Project by Mathilde.</p>
        </aside>
    </nav>
</footer>