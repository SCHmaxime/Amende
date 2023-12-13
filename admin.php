<?php

session_start() ;
require_once('bdd.php') ;

if (!empty($_SESSION['admin'])) {

$requeteUser="SELECT * FROM admin " ;
$reponseUser=$bdd->query($requeteUser) ;

foreach ($reponseUser as $value) {
    $id=$value['id_user'] ;
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
    <title>Back Office</title>
</head>
<body>
    <header>
        <div class="container">
            <p>Page admin</p>
            <div class="block">
                <div class="entete-bg">
                    <div class="entete">
                        <a href="index.php">Accueil |</a>
                        <a href="deconnecter.php">se déconnecter</a>
                    </div>
                </div>
                <h1>BACK OFFICE</h1>
                <a class="couleur-action" href="ardoise.php">Creer une ardoise</a><br>
                <p class="couleur-action" >Modifier une ardoise</p>

                <?php 

        $requete="SELECT * FROM ardoise ";
        $reponse=$bdd->query($requete) ;
                
                foreach ($reponse as $value) {
                    $id=$value['id_ardoise'] ;
                    $prenom=$value['prenom'] ;
                    $ardoise=$value['montant'] ;
                    echo "<ul><li><img src='./img/fleche.svg'><a class='modif_ardoise' href='form_modifier_ardoise.php?id_ardoise=$id'>".$prenom.'</a></li></ul>' ;
                }
                
                ?>
                <p class="couleur-action" >Supprimer une ardoise</p>

                <?php 

        $requete="SELECT * FROM ardoise ";
        $reponse=$bdd->query($requete) ;
                
                foreach ($reponse as $value) {
                    $id=$value['id_ardoise'] ;
                    $prenom=$value['prenom'] ;
                    $ardoise=$value['montant'] ;
                    $_SESSION['id_ardoise']=$id ;
                    echo "<ul><li><img src='./img/fleche.svg'><a class='modif_ardoise' href='form_supprimer_ardoise.php?id_ardoise=$id'>".$prenom.'</a></li></ul>' ;
                }
                echo '<br>' ;
                
                ?>
                <a class="couleur-action-mdp" href="form_modifier_mdp.php">Modifier mon mot de passe</a>
                <?php

            }

            ?>
            </div>
        </div>
        
    </header>
</body>
</html>