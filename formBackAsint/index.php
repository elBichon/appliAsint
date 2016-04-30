<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>connexion</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <Header>
    </header>

    <h1>Connexion au Back de l'appli de gestion du wes'</h1>

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

    <section id="connexion">
        <h3>Connexion</h3></br>
        <div class="col-sm-12 col-xs-12 col-lg-12">
            <form action="accueil.php" method="post">
            <div class="col-lg-4 col-sm-4 col-xs-4">
            <label for="loginInputConnexion">Login</label>
            <input type="text" class="form-control" id="loginConnexion" placeholder="login" name="login">
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-4">
                <label for="passwordConnexion">Mot de passe</label>
                <input type="password" class="form-control" id="passwordConnexion" placeholder="Password" name="password">
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-4">
                <button type="submit" class="btn btn-default">Se connecter</button>
            </div>
            </form>
        </div>
    </section>

    <footer>
    </footer>
    </body>
</html>
