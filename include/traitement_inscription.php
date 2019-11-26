<!-- Traitement php et sql inscription -->

<?php

if (isset($_POST['inscription'])) 
{
    $login = $_POST['login'];

    $connexion = mysqli_connect('localhost', 'root', '', 'discussion');
    $checkbase = "SELECT login from utilisateurs WHERE login = '$login'";
    $querycheck = mysqli_query($connexion, $checkbase);
    $resultatcheck = mysqli_fetch_all($querycheck);

    if (!empty($resultatcheck)) 
    {
        echo "Ce logo est déjà utilisé ! ";
    } elseif ($_POST['password'] != $_POST['password_conf']) 
    {
        echo "/!\ Les mots de passe sont différents ! /!\\";
    } else 
    {
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT, array('cost' => 12));

        $insert_inscri = "INSERT INTO utilisateurs (login,password) VALUE ('$login','$password')";
        $query_inscri = mysqli_query($connexion, $insert_inscri);
        header('Location:connexion.php');
    }

    mysqli_close($connexion);
}
?>