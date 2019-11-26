<!-- Traitement php et sql connexion -->

<?php

if (isset($_POST['connexion'])) 
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $connexion = mysqli_connect('localhost','root','','discussion');
    $recup_inscri = "SELECT * from utilisateurs WHERE login = '$login'";
    $query_recupinscri = mysqli_query($connexion,$recup_inscri);
    $resultat_recupinscri = mysqli_fetch_assoc($query_recupinscri);
    // var_dump($resultat_recupinscri);

    if(!empty($resultat_recupinscri))
    {
        if(password_verify($password,$resultat_recupinscri['password']))
        {
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $resultat_recupinscri['id'];
            header('Location:index.php');
        }
        else
        {
            echo "/!\ Erreur de mot de passe /!\\";
        }
    }
    else 
    {
        echo "Cet utilisateur n'existe pas !";
    }
    mysqli_close($connexion);
}
?>