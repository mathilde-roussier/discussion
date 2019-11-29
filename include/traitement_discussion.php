<!-- Traitement php et sql commentaire -->

<?php

$connexion = mysqli_connect('localhost', 'root', '', 'discussion');
$recup_message = "SELECT message,login,date FROM messages JOIN utilisateurs ON messages.id_utilisateur = utilisateurs.id ORDER BY date DESC";
$query_recupmessage = mysqli_query($connexion, $recup_message);
$messages = mysqli_fetch_all($query_recupmessage, MYSQLI_ASSOC);

$taille = sizeof($messages);

$i = 0;
while ($i < $taille) {
    // Changement format date 
    $date = date('d/m/Y à H:i:s', strtotime($messages[$i]['date']));
    // Changement format login
    $login = "@" . $messages[$i]['login'];

    if ($messages[$i]['login'] == $_SESSION['login']) { ?>

        <aside class='connect'>
            <div>
                <p> <span class="pseudo"><?php echo $login ?></span> Le <?php echo $date . " :" ?> </p>
                <h1> <?php echo $messages[$i]['message'] ?> </h1>
            </div>
        </aside>

    <?php } else { ?>

        <aside>
            <div>
                <p> <span class="pseudo"><?php echo $login ?></span> Le <?php echo $date . " :" ?> </p>
                <h1> <?php echo $messages[$i]['message'] ?> </h1>
            </div>
        </aside>

<?php }
    $i = $i + 1;
}

?>