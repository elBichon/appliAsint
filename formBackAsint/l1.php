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
<h1>espace d'envoi de messages pour l1</h1>
<ul class="nav nav-tabs">
<li role="deconnexion"><a href="deconnexion.php">Deconnexion</a></li>
</ul>
<section id="nom">
<h2><?php
    $noml1 = $bdd->query('SELECT * FROM nomListeAppli WHERE id=1');
    while ($donneesNoml1 = $noml1->fetch())
    {
        echo '<p><strong>' . $donneesNoml1['nom'] . '</strong></br></p>';
    }
    $noml1->closeCursor();
    ?></h2>
</section>

<section id="messages">
    <h2> messages envoyés</h2>
<?php
    $countMessagel1 = $bdd->query('SELECT DISTINCT(COUNT(message)) FROM messagesAppli WHERE nom="l1" AND accord="true"');
    while ($donneesCountMessagel1 = $countMessagel1->fetch())
    {
        echo $donneesCountMessagel1[0];
    }
    $countMessagel1->closeCursor();
    ?>
</br></br>
<?php
    $messagel1 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l1" ORDER BY date_envoi DESC');
    while ($donneesMessagel1 = $messagel1->fetch())
    {
        echo '<p><strong>' . $donneesMessagel1['date_envoi'] . '</strong>  ' . $donneesMessagel1['message'] .'</br></p>';
    }
    $messagel1->closeCursor();
    ?>
    <h2> messages acceptés</h2></br>
<?php
    $messagel1 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l1" AND accord="true" ORDER BY date_envoi DESC');
    while ($donneesMessagel1 = $messagel1->fetch())
    {
        echo '<p><strong>' . $donneesMessagel1['date_envoi'] . '</strong>  ' . $donneesMessagel1['message'] .'</br></p>';
    }
    $messagel1->closeCursor();
    ?>
    <h2> messages refusés</h2></br>
<?php
    $messagel1 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l1" AND accord="false" ORDER BY date_envoi DESC');
    while ($donneesMessagel1 = $messagel1->fetch())
    {
        echo '<p><strong>' . $donneesMessagel1['date_envoi'] . '</strong>  ' . $donneesMessagel1['message'] .'</br></p>';
    }
    $messagel1->closeCursor();
    ?></br></br>
    <form action="accueil.php" method="post">
        <label for="note">Nouveau Message</label><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
        <input type="hidden" name="nom" value="l1" >
        <input type="hidden" name="accord" value="void" >
        <input type="submit" value="Envoyer" />
    </form>
<?php
    $req = $bdd->prepare('INSERT INTO messagesAppli (nom, message, accord, date_envoi) VALUES(?,?,?, NOW())');
    $req->execute(array($_POST['nom'], $_POST['message'], $_POST['accord']));
    ?>
</br></br>
    <form action="accueil.php" method="post">
        <label for="note">Nouveau Nom</label><br />
        <label for="newName">Nouveau Nom</label> :  <input type="text" name="newName" id="newName" /><br />
        <input type="hidden" name="id" value="1" >
        <input type="submit" value="Envoyer" />
    </form>
<?php
    $req=$bdd->prepare("UPDATE nomListeAppli SET nom = :newName WHERE id = :id" );
    $req->bindParam(":newName",$_POST['newName']);
    $req->bindParam(":id",$_POST['id']);
    $req->execute();
    ?>
</section>
