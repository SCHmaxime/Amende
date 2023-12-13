<?php 

session_start() ;
if (!empty($_SESSION['admin'])) {
    echo 'Vous etes deja connecté <br>' ;
    header("Refresh:2 ; url=index.php")  ;
} else {

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
        <h1>Page de connexion</h1>
        <form action="connecter.php" method="get">
            <label for="user"> Nom d'utilisateur</label>
            <input type="texte" name="user">
            <label for="mdp">Mot de passe </label>
            <input type="password" name="mdp">
            <input type="submit" value="Se connecter">
        </form>

        <a href="index.php">Accueil</a>

    </header>
</body>
</html>

<?php

} 

?>