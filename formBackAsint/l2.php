<?php session_start();
    ?>
<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=dbAsint', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    ?>
<h1>espace d'envoi de messages pour l2</h1>
<ul class="nav nav-tabs">
<li role="deconnexion"><a href="deconnexion.php">Deconnexion</a></li>
</ul>
<section id="nom">
    <h2><?php
    $noml2 = $bdd->query('SELECT * FROM nomListeAppli WHERE id=2');
    while ($donneesNoml2 = $noml2->fetch())
    {
        echo '<p><strong>' . $donneesNoml2['nom'] . '</strong></br></p>';
    }
    $noml2->closeCursor();
    ?></h2>
</section>

<section id="messages">
    <h2> messages envoyés</h2>
<?php
    $countMessagel2 = $bdd->query('SELECT DISTINCT(COUNT(message)) FROM messagesAppli WHERE nom="l2" AND accord="true"');
    while ($donneesCountMessagel2 = $countMessagel2->fetch())
    {
        echo $donneesCountMessagel2[0];
    }
    $countMessagel2->closeCursor();
    ?>
</br></br>
<?php
    $messagel2 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l2" ORDER BY date_envoi DESC');
    while ($donneesMessagel2 = $messagel2->fetch())
    {
        echo '<p><strong>' . $donneesMessagel2['date_envoi'] . '</strong>  ' . $donneesMessagel2['message'] .'</br></p>';
    }
    $messagel2->closeCursor();
    ?>
    <h2> messages acceptés</h2></br>
<?php
    $messagel2 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l2" AND accord="true" ORDER BY date_envoi DESC');
    while ($donneesMessagel2 = $messagel2->fetch())
    {
        echo '<p><strong>' . $donneesMessagel2['date_envoi'] . '</strong>  ' . $donneesMessagel2['message'] .'</br></p>';
    }
    $messagel2->closeCursor();
    ?>
    <h2> messages refusés</h2></br>
<?php
    $messagel2 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l2" AND accord="false" ORDER BY date_envoi DESC');
    while ($donneesMessagel2 = $messagel2->fetch())
    {
        echo '<p><strong>' . $donneesMessagel2['date_envoi'] . '</strong>  ' . $donneesMessagel2['message'] .'</br></p>';
    }
    $messagel2->closeCursor();
    ?></br></br>

    <form action="l2.php" method="post">
        <label for="note">Nouveau Message</label><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
        <input type="hidden" name="nom" value="l2" >
        <input type="hidden" name="accord" value="void" >
        <input type="submit" value="Envoyer" />
    </form>
<?php
    $req = $bdd->prepare('INSERT INTO messagesAppli (nom, message, accord, date_envoi) VALUES(?,?,?, NOW())');
    $req->execute(array($_POST['nom'], $_POST['message'], $_POST['accord']));
    ?>
</br></br>
    <form action="l2.php" method="post">
        <label for="note">Nouveau Nom</label><br />
        <label for="newName">Nouveau Nom</label> :  <input type="text" name="newName" id="newName" /><br />
        <input type="hidden" name="id" value="2" >
        <input type="submit" value="Envoyer" />
    </form>
<?php
$req=$bdd->prepare("UPDATE nomListeAppli SET nom = :newName WHERE id = :id" );
$req->bindParam(":newName",$_POST['newName']);
$req->bindParam(":id",$_POST['id']);
$req->execute();
?>

</section>
