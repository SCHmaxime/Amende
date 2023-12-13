<?php

session_start() ;
require_once('bdd.php') ;

if ((!empty($_GET['user']))&&(!empty($_GET['mdp']))) {
    $user=$_GET['user'] ;
    $mdp=$_GET['mdp'] ;
    $hash=password_hash($mdp , PASSWORD_BCRYPT) ;
    $requete="INSERT INTO admin (id_user , login , password ) VALUES ('' ,'$user' , '$hash')" ;
    $reponse=$bdd->query($requete) ;
    echo "Le compte admin $user a bien été creé" ;
    header("Refresh:3 ; url=form_admin.php") ;  ; 
} else {
    echo "Merci de remplir tous les champs" ;
    header("Refresh:3 ; url=form_admin.php") ;
}