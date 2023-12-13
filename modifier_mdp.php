<?php

session_start() ;
require_once('bdd.php') ;

if (!empty($_SESSION['admin'])) {

$idSession=$_GET['id'] ;
$mdp=$_GET['mdp'] ;
$requeteUser="SELECT * FROM admin WHERE id_user=$idSession " ;
$reponseUser=$bdd->query($requeteUser) ;

foreach ($reponseUser as $value) {
    $userBDD=$value['login'] ;
    $mdpBDD=$value['password'] ;
    $id=$value['id_user'] ;
}

// echo $reponseUser['login'] ;

$mdpVerify=password_verify($mdp , $mdpBDD) ; 

    if (!empty($_GET['mdp'])&&(!empty($_GET['newmdp']))) {
        $newmdp=$_GET['newmdp'] ;      
        if ($mdpVerify) {
            if($mdp!=$newmdp) {
                $newmdphash=password_hash($newmdp , PASSWORD_BCRYPT) ;
                $requete="UPDATE admin SET password='$newmdphash' WHERE id_user='$idSession'" ;
                $reponse=$bdd->query($requete) ;    
                echo "Mot de passe changer avec succès" ;
                header("Refresh:3 ; url=index.php") ;
            } else {
                echo "Merci de choisir un nouveau mot de passe different de l'ancien" ;
                header("Refresh:3 ; url=form_modifier_mdp.php")  ;
            }
        }
        } else {
            echo "Merci de renseigner tous les champs " ;
            header("Refresh:3 ; url=form_modifier_mdp.php")  ;
        }
}

?>

