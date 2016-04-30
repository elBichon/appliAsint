<!DOCTYPE html>
<html lang="fr">
<head>
<title>accueil</title>
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
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
<div id="asintResume">
<p>
<?php

    $messageL2Resume = $bdd->query('SELECT * FROM messagesAppli WHERE nom="asint" ORDER BY date_envoi DESC LIMIT 0, 1');
    while ($donneesMessageL2Resume = $messageL2Resume->fetch())
    {
        echo '<p><strong>' . $donneesMessageL2Resume['date_envoi'] . '</strong>  ' . $donneesMessageL2Resume['message'] .'</br></p>';
    }
    $messageL2Resume->closeCursor();?>

</p>
</div>
    <div id="countMessageAsint"><p>
<?php
    $countMessageAsint = $bdd->query('SELECT DISTINCT(COUNT(message)) FROM messagesAppli WHERE nom="asint"');
    while ($donneesCountMessageAsint = $countMessageAsint->fetch())
    {
        echo $donneesCountMessageAsint[0];
    }
    $countMessageAsint->closeCursor();
    ?>
</p>
</div><div id="messageAsint"><?php
    $messageAsint = $bdd->query('SELECT * FROM messagesAppli WHERE nom="asint" ORDER BY date_envoi DESC');
    while ($donneesMessageAsint = $messageAsint->fetch())
    {
        echo '<p><strong>' . $donneesMessageAsint['date_envoi'] . '</strong>  ' . $donneesMessageAsint['message'] .'</p>';
    }
    $messageAsint->closeCursor();
    ?>
</div>
<div id="temps"><div id="weather"<link href="http://fr.snow-forecast.com/stylesheets/feed.css" media="screen" rel="stylesheet" type="text/css" /><div id="wf-weatherfeed"><iframe style="overflow:hidden;border:none;" allowtransparency="true" height="272" width="469" src="http://fr.snow-forecast.com/resorts/Abondance/forecasts/feed/top/m" scrolling="no" frameborder="0" marginwidth="0" marginheight="0"><p>Votre navigateur ne supporte pas les iframes.</p></iframe><div id="wf-link"><a href="http://www.snow-forecast.com/"><img alt="Snow Forecast" src="http://fr.snow-forecast.com/images/feed/snowlogo-150.png"/></a><p id="cmt">Voir les prévisions détaillées de neige pour <a href="http://fr.snow-forecast.com/resorts/Abondance?utm_source=embeddable&amp;utm_medium=widget&amp;utm_campaign=Abondance">Abondance</a> à:<br /><a href="http://fr.snow-forecast.com/resorts/Abondance?utm_source=embeddable&amp;utm_medium=widget&amp;utm_campaign=Abondance"><strong>snow-forecast.com</strong></a></p><div style="clear: both;"></div></div></div></div>
    </div>
<div id="map"><img width="200" height="400" src="http://localhost/asint/imagesAppli/test.jpg" alt="la carte des pistes"></div>
</section>

<section id="l1">
<div id="nomL1">
<?php
    $nomL1 = $bdd->query('SELECT nom FROM nomListeAppli WHERE id=1');
        while ($donneesNomL1 = $nomL1->fetch())
    {
        echo $donneesNomL1['nom'];
    }
    $nomL1->closeCursor();
?>
</div>
<div id="countMessageL1">
    <p>
    <?php
        $countMessageL1 = $bdd->query('SELECT DISTINCT(COUNT(message)) FROM messagesAppli WHERE nom="l1" AND accord="true"');
            while ($donneesCountMessageL1 = $countMessageL1->fetch())
        {
            echo $donneesCountMessageL1[0];
        }
        $countMessageL1->closeCursor();
    ?>
    </p>
</div>
<div id="messageL1Resume">
    <p>
    <?php
        $messageL1Resume = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l1" AND accord="true" ORDER BY date_envoi DESC LIMIT 0, 1');
            while ($donneesMessageL1Resume = $messageL1Resume->fetch())
            {
            echo '<p><strong>' . $donneesMessageL1Resume['date_envoi'] . '</strong>  ' . $donneesMessageL1Resume['message'] .'</br></p>';
        }
        $messageL1Resume->closeCursor();
?>
    </p>
</div>
<div id="messageL1"><?php
    $messageL1 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l1" AND accord="true" ORDER BY date_envoi DESC');
    while ($donneesMessageL1 = $messageL1->fetch())
    {
        echo '<p><strong>' . $donneesMessageL1['date_envoi'] . '</strong>  ' . $donneesMessageL1['message'] .'</br></p>';
    }
    $messageL1->closeCursor();
    
    ?>
</div>

</section><section id="l2">
<div id="nomL2">
<?php
    $nomL2 = $bdd->query('SELECT nom FROM nomListeAppli WHERE id=2');
        while ($donneesNomL2 = $nomL2->fetch())
    {
        echo $donneesNomL2['nom'];
    }
    $nomL2->closeCursor();
?>
</div>
<div id="countMessageL2">
    <p>
    <?php
        $countMessageL2 = $bdd->query('SELECT DISTINCT(COUNT(message)) FROM messagesAppli WHERE nom="l2" AND accord="true"');
            while ($donneesCountMessageL2 = $countMessageL2->fetch())
        {
            echo $donneesCountMessageL2[0];
        }
        $countMessageL2->closeCursor();
    ?>
    </p>
</div>
<div id="messageL2Resume">
    <p>
    <?php
        $messageL2Resume = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l2" AND accord="true" ORDER BY date_envoi DESC LIMIT 0, 1');
            while ($donneesMessageL2Resume = $messageL2Resume->fetch())
            {
            echo '<p><strong>' . $donneesMessageL2Resume['date_envoi'] . '</strong>  ' . $donneesMessageL2Resume['message'] .'</br></p>';
        }
        $messageL2Resume->closeCursor();
?>
    </p>
</div>
<div id="messageL2"><?php
    $messageL2 = $bdd->query('SELECT * FROM messagesAppli WHERE nom="l2" AND accord="true" ORDER BY date_envoi DESC');
    while ($donneesMessageL2 = $messageL2->fetch())
    {
        echo '<p><strong>' . $donneesMessageL2['date_envoi'] . '</strong>  ' . $donneesMessageL2['message'] .'</br></p>';
    }
    $messageL2->closeCursor();
?>
</div>
</section>
<script src="JS/jqueryMin.js"></script>
</body>
</html>