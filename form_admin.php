<?php

session_start() ;
require_once('bdd.php') ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Connexion</title>
</head>
<body>
    <header>
        <form action="ajout_admin.php" method="get">
            <label for="user"> User </label>
            <input type="text"  name="user" placeholder="Votre user">
            <label for="password"> Password </label>
            <input type="password" name="mdp" placeholder="Votre mdp">
            <input type="submit" value="Creer admin">
        </form>

        <a href="index.php">Accueil</a>

        </header>
</body>
</html>