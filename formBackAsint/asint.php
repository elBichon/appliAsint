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

<section id="asint">
    <div id="newMessage">
        <form action="asint.php" method="post">
            <label for="note">Nouveau Message</label><br />
            <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
            <input type="hidden" name="nom" value="asint" >
            <input type="submit" value="Envoyer" />
        </form>
 <?php
     $req = $bdd->prepare('INSERT INTO messagesAppli (nom, message, date_envoi) VALUES(?,?, NOW())');
     $req->execute(array($_POST['nom'], $_POST['message']));
 ?>
    </div>
    <div id="sendMessage">messages envoyés
<?php
    $messageAsint = $bdd->query('SELECT * FROM messagesAppli WHERE nom="ASINT" ORDER BY date_envoi DESC');
    while ($donneesMessageAsint = $messageAsint->fetch())
    {
        echo '<p><strong>' . $donneesMessageAsint['date_envoi'] . '</strong>  ' . $donneesMessageAsint['message'] .'</p></br>';
    }
    $messageAsint->closeCursor();
 ?>
    </div>
</section>
 
<section id="l1">
    <div id="acceptedL1">messages acceptés L1</div></br>
 <?php
     $messageL1 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l1" AND accord="true" ORDER BY date_envoi DESC');
     while ($donneesMessageL1 = $messageL1->fetch())
     {
         echo '<p><strong>' . $donneesMessageL1['date_envoi'] . '</strong>  ' . $donneesMessageL1['message'] .'</p></br>';
    }
     $messageL1->closeCursor();
 ?>
    </div>
    <div id="rejectL1">messages refusés L1</div></br>
<?php
    $messageL1 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l1" AND accord="false" ORDER BY date_envoi DESC');
    while ($donneesMessageL1 = $messageL1->fetch())
    {
        echo '<p><strong>' . $donneesMessageL1['date_envoi'] . '</strong>  ' . $donneesMessageL1['message'] .'</p></br>';
    }
    $messageL1->closeCursor();
?>
    </div>
    <div id="waitL1">messages en attente L1</div></br>
<?php
    $messageL1 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l1" AND accord="void" ORDER BY date_envoi DESC');
    while ($donneesMessageL1 = $messageL1->fetch())
    {
        echo '<p><strong>' . $donneesMessageL1['date_envoi'] . '</strong>identifiant  ' . $donneesMessageL1['id'] .'<p>message: </p>'. $donneesMessageL1['message'] .'</p></br>';
    }
    $messageL1->closeCursor();
 ?>
    </div>
    <div id="acceptNewL1"><div id="acceptNewL2">
        <form action="asint.php" method="post">
            <label for="majMessageL1">mettre à jour les messages</label><br />
            <label for="accord">mettre à jour</label> :
            <select name="majMessageL1">
                <option value="true">accepté</option>
                <option value="false" selected>refusé</option>
            </select>
    <br />
            <label for="identifiant">identifiant</label> :  <input type="text" name="id" id="id" /><br />
    <input type="submit" value="Envoyer" />
        </form>
<?php
    $req=$bdd->prepare("UPDATE nomListeAppli SET accord = :majAccordL1 WHERE id = :id" );
    $req->bindParam(":majAccordL1",$_POST['majAccordL2']);
    $req->bindParam(":id",$_POST['id']);
    $req->execute();
    ?>
    </div>
</section>
 
 <section id="l2">
    <div id="acceptedL2">messages acceptésL2</div></br>
        <?php
            $messageL2 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l2" AND accord="true" ORDER BY date_envoi DESC');
                while ($donneesMessageL2 = $messageL2->fetch())
            {
                echo '<p><strong>' . $donneesMessageL2['date_envoi'] . '</strong>  ' . $donneesMessageL2['message'] .'</p></br>';
            }
            $messageL2->closeCursor();
 ?>
    <div id="rejectL2">messages refusésL2
 <?php
     $messageL2 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l2" AND accord="false" ORDER BY date_envoi DESC');
     while ($donneesMessageL2 = $messageL2->fetch())
     {
         echo '<p><strong>' . $donneesMessageL2['date_envoi'] . '</strong>  ' . $donneesMessageL2['message'] .'</p></br>';
     }
     $messageL2->closeCursor();
 ?>
    </div>
    <div id="waitL2">messages en attenteL2</div></br>
<?php
        $messageL2 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l2" AND accord="void" ORDER BY date_envoi DESC');
        while ($donneesMessageL2 = $messageL2->fetch())
        {
            echo '<p><strong>' . $donneesMessageL2['date_envoi'] . '</strong> identifiant ' . $donneesMessageL2['id'] .' message: '. $donneesMessageL2['message'] .'</p></br>';
        }
        $messageL2->closeCursor();
?>
    </div>
    <div id="acceptNewL2"></br>
        <form action="asint.php" method="post">
            <label for="majMessageL2">mettre à jour les messages</label><br />
            <label for="accord">mettre à jour</label> :
                <select name="majMessageL2">
                    <option value="true">accepté</option>
                    <option value="false" selected>refusé</option>
                </select>
        <br />
                <label for="identifiant">identifiant</label> :  <input type="text" name="id" id="id" /><br />
                <input type="submit" value="Envoyer" />
        </form>
<?php
    $req=$bdd->prepare("UPDATE nomListeAppli SET accord = :majAccordL2 WHERE id = :id" );
    $req->bindParam(":majAccordL2",$_POST['majAccordL2']);
    $req->bindParam(":id",$_POST['id']);
    $req->execute();
    ?>
    </div>
</section>
