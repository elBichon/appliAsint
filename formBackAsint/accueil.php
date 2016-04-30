<?php session_start();
    ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>appliAsintWes</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <header>
    </header>

    <h1>Gèrer l'application</h1>
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

    <section id="corps">
    <?php
        $login = htmlspecialchars($_POST['login']);
        $passwd = htmlspecialchars($_POST['password']);
    
        if (empty($login) || empty($passwd)){
            $connexion_erreur = "Vous devez renseigner un login et un mot de pass";
            $retour = "Cliquez <a href='index.php'>ici</a> pour revenir à la page d'accueil";
            echo $connexion_erreur;
            echo "</br>";
            echo $retour;
        }
        else{
            $req = $bdd->prepare('SELECT id FROM mdpTable WHERE login = :login AND passwd = :passwd');
            $req->execute(array(
                                'login' => $login,
                                'passwd' => $passwd));
            $resultat = $req->fetch();
        
        if (!$resultat){
            echo 'Mauvais identifiant ou mot de passe !';
        }
        else{
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['login'] = $resultat['login'];
        }
    }
        if ($_SESSION['id'] == 1){require 'asint.php';}
        else if ($_SESSION['id'] == 2){require 'l1.php';}
        else if ($_SESSION['id'] == 3){require 'l2.php';}
    ?>
    </section>

    <footer>
    </footer>

    </body>
</html>