<!-- Traitement php et sql commentaire -->

<?php

if (isset($_POST['validation'])) 
{
    if (!empty($_POST['commentaire'])) 
    {
        // Création variables 
        $commentaire = addslashes($_POST['commentaire']);
        $utilisateur = $_SESSION['id'];

        $connexion = mysqli_connect('localhost', 'root', '', 'discussion');
        $insert_comment = "INSERT INTO messages (message,id_utilisateur,date) VALUES ('$commentaire','$utilisateur',NOW())";
        $query_insertcomment = mysqli_query($connexion, $insert_comment);

        mysqli_close($connexion);
        header('Location:discussion.php');
    }
} 

?>