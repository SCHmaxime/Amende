<?php

session_start() ;
require_once('bdd.php') ;
$requete="SELECT * FROM ardoise ";
$reponse=$bdd->query($requete) ;

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
            <p>Page accueil</p>
            <div class="block">
                <div class="entete-bg">
                    <div class="entete">
                        <?php if (!empty($_SESSION['admin'])) { echo '<a href="admin.php">Admin |</a>' ;} ?>
                        <a href="form_connecter.php">Se connecter |</a>
                        <a href="deconnecter.php">Se déconnecter</a>
                    </div>
                </div>  
                <h1>ARDOISE NUMERIQUE</h1>
                    <ul>

                    <?php 
                    
                    foreach ($reponse as $value) {
                        $id=$value['id_ardoise'] ;
                        $prenom=$value['prenom'] ;
                        $ardoise=$value['montant'] ;
                        echo '<div class="user">
                                <div class="prenom">
                                    <li>'.$prenom.'</li>
                                </div>' ;
                        echo '<div class="ardoise">
                                    <li>'.$ardoise.'€</li>
                                </div>
                            </div>' ;
                    }

                    ?>
                    </ul>
                </div>
            </div>
    </header>
</body>
</html>
