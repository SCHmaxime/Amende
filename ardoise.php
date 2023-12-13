<?php

session_start() ;

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
    <title>Nouvelle ardoise</title>
</head>
<body>
    <header>
        <div class="container">
            <p>Page créer une ardoise</p>
            <div class="block">
                <div class="entete-bg">
                    <div class="entete">
                        <?php if (!empty($_SESSION['admin'])) { echo '<a href="admin.php">Admin |</a>' ;} ?>
                        <a href="form_connecter.php">Se connecter |</a>
                        <a href="deconnecter.php">Se déconnecter</a>
                    </div>
                </div>   
                <h1>CREER UNE ARDOISE</h1>

                <p class="obligation">Les champs avec un * sont obligatoires</p>
                
                <form action="ajout_ardoise.php" method="get">
                    <label class="new_ardoise_label" for="prenom">Prénom  (*)</label><br>
                    <input  class="new_ardoise_input" type="text" name="prenom"><br>
                    <label class="new_ardoise_label" for="montant">Montant (*)</label><br>
                    <input class="new_ardoise_input" type="number" name="montant"><br>
                    <input class="new_ardoise_bouton" type="submit" value="VALIDER">
                </form>
                <a href="index.php">Accueil</a>
            </div>
        </div>

</header>

</body>
</html>