<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    ?>
<h1>au revoir</h1>
<ul class="nav nav-tabs">
<li role="deconnexion"><a href="index.php">connexion</a></li>
</ul>