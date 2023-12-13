<?php

session_start() ;
require_once('bdd.php') ;
if (!empty($_SESSION['admin'])) {

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
    <title>Amende numérique</title>
</head>

<body>
    <header>
    <div class="container">
    <p>Page modification mdp</p>
        <div class="block">
            <div class="entete-bg">
                <div class="entete">
                    <?php if (!empty($_SESSION['admin'])) { echo '<a href="admin.php">Admin |</a>' ;} ?>
                    <a href="form_connecter.php">Se connecter |</a>
                    <a href="deconnecter.php">Se déconnecter</a>
                </div>
            </div>  
        <h1>Formulaire de modification de mot de passe</h1>
        <p class="obligation">Les champs avec un * sont obligatoires</p>
            <div class="block">
                <form action="modifier_mdp.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id_user'] ; ?>">
                    <label class="new_ardoise_label" for="user"> Pour l'utlisateur : </label><br>
                    <input class="new_ardoise_input" type="text" readonly="readonly" name="user" value="<?php echo $_SESSION['user']; ?>"><br>
                    <label class="new_ardoise_label" for="password"> Mot de passe actuel (*):</label><br>
                    <input class="new_ardoise_input" type="password" name="mdp" placeholder="Votre mdp"><br>
                    <label class="new_ardoise_label" for="newmdp"> Nouveau mot de passe (*):</label><br>
                    <input class="new_ardoise_input" type="Password" name="newmdp" placeholder="Votre nouveau mdp"><br>
                    <input class="new_ardoise_bouton" type="submit" value="Changer le mot de passe">
                </form>
            </div>
        <a href="index.php">Accueil</a>
    </div>
</header>
</body>
</html>

<?php

}

?>