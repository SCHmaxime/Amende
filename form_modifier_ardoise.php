<?php

session_start() ;
require_once('bdd.php') ;

if (!empty($_SESSION['admin'])) {

    if (empty($_GET['id_ardoise'])) {
        header("Refresh:1 ; url=index.php")  ;
    } else {

    $id=$_GET['id_ardoise'] ;
    $requete="SELECT prenom , montant FROM ardoise WHERE id_ardoise=$id";
    $reponse=$bdd->query($requete) ;
            
            foreach ($reponse as $value) {
                $prenom=$value['prenom'] ;
                $ardoise=$value['montant'] ;
            }

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
            <p>Page modification d'une ardoise</p>
            <div class="block">
                <div class="entete-bg">
                    <div class="entete">
                        <?php if (!empty($_SESSION['admin'])) { echo '<a href="admin.php">Admin |</a>' ;} ?>
                        <a href="form_connecter.php">Se connecter |</a>
                        <a href="deconnecter.php">Se déconnecter</a>
                    </div>
                </div>   
                <h1>Formulaire de modification d'une ardoise</h1>
            <p class="obligation">Les champs avec un * sont obligatoires</p>
            <form action="modifier_ardoise.php" method="get">
                <input type="hidden" name="id" value="<?php echo $id ; ?>">
                <label class="new_ardoise_label" for="prenom"> Pour l'utlisateur : </label>
                <input class="new_ardoise_input" type="text" readonly="readonly" name="prenom" value="<?php echo $prenom ; ?>">
                <label class="new_ardoise_label" for="ardoise"> Montant de l'ardoise :</label>
                <input class="new_ardoise_input" type="number" readonly="readonly" name="ardoise" value="<?php echo $ardoise ; ?>">
                <label class="new_ardoise_label" for="newmdp"> Nouveau montant de l'ardoise (*):</label>
                <input class="new_ardoise_input" type="number" name="newardoise" placeholder="Nouveau montant de l'ardoise">
                <input class="new_ardoise_bouton" type="submit" value="Modifier l'ardoise">
            </form>
            <a href="index.php">Accueil</a>
        </div>
    </header>
</body>
</html>

<?php 

    }
}

?>