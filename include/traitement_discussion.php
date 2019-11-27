<!-- Traitement php et sql commentaire -->

<?php 

$connexion = mysqli_connect('localhost','root','','discussion');
$recup_message = "SELECT message,login,date FROM messages JOIN utilisateurs ON messages.id_utilisateur = utilisateurs.id";
$query_recupmessage = mysqli_query($connexion,$recup_message);
$messages = mysqli_fetch_all($query_recupmessage,MYSQLI_ASSOC);

$taille = sizeof($messages);

$i = 0;
while($i < $taille)
{
    // Changement format date 
    $date = date('d-m-Y',strtotime($messages[$i]['date']));
    // Changement format login
    $login = "@".$messages[$i]['login'];

    echo "<h1> Posté le " . $date . " par " . $login . " : <br></h1><p>" . $messages[$i]['message'] . "</p>";

    $i = $i + 1;
}

?>