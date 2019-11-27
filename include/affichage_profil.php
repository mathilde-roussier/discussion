<!-- Affichage message profil -->

<?php

if (isset($_POST['profil'])) 
{
    if ($erreur_oldpassword == 1) 
    {
        echo "Mot de passe actuel incorrect.";
    } 
    else 
    {
        if ($erreur_log == 1) 
        {
            echo $login . " est déjà utilisé !";
        }
        elseif ($erreur_password == 1) 
        {
            echo "/!\ Les deux mots de passe sont différents !";
        }
        elseif ($modif_log == 1) 
        {
            if ($modif_password == 1) 
            {
                echo "Validation des différentes modifications !";
            }
            else
            {
                echo "Validation du nouveau login.";
            }
        }
        elseif ($modif_password == 1)
        {
            echo "Validation du nouveau mot de passe. ";
        }
    }
}

?>