<!-- Traitement php et sql profil -->

<?php

$connexion = mysqli_connect('localhost','root','','discussion');
$recup_data = "SELECT * FROM utilisateurs WHERE login = '".$_SESSION['login']."'";
$query_recupdata = mysqli_query($connexion,$recup_data);
$resultat_recupdata = mysqli_fetch_assoc($query_recupdata);
// var_dump($resultat_recupdata);

if(isset($_POST['profil']))
{
    // Création variables //
    $login = $_POST['login'];
    $old_password = $_POST['old_password'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf'];

    // Création booléens qui nous servirons pour l'affichage des messages //
    $modif_log = false;
    $modif_password = false;
    $erreur_log = false;
    $erreur_oldpassword = false;
    $erreur_password = false;

    if(password_verify($old_password,$resultat_recupdata['password']))
    {
        if($login != $resultat_recupdata['login'])
        {
            $requete_verif = "SELECT login FROM utilisateurs WHERE login = '$login'";
            $query_verif = mysqli_query($connexion,$requete_verif);
            $resultat_verif = mysqli_fetch_assoc($query_verif);
            
            if(!empty($resultat_verif))
            {
                $erreur_log = true;
            }
            else
            {
                $update_log = "UPDATE utilisateurs SET login = '$login' WHERE id = '".$resultat_recupdata['id']."'";
                $query_log = mysqli_query($connexion,$update_log);
                $resultat_recupdata['login'] = $login;
                $_SESSION['login'] = $login;
                $modif_log = true;
            }
        }

        if(!empty($password))
        {
            if($password == $password_conf)
            {
                $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                $update_password = "UPDATE utilisateurs SET password = '$password' WHERE id = '".$resultat_recupdata['id']."'";
                $query_password = mysqli_query($connexion,$update_password);
                $modif_password = true;
            }
            else
            {
                $erreur_password = true;
            }
        }
    }
    else
    {
        $erreur_oldpassword = true;
    }

}

?>