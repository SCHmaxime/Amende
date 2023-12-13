<?php

session_start() ;
require_once('bdd.php') ;

if (!empty($_SESSION['admin'])) {

    if ((!empty($_GET['prenom']))&&(!empty($_GET['montant']))) {
        $prenom=strtolower($_GET['prenom']) ;
        if (is_numeric($_GET['montant'])) ; {
        $montant=$_GET['montant'] ;
        $requeteInsert="INSERT INTO ardoise (id_ardoise , prenom , montant) VALUES ('' ,'$prenom' , '$montant')" ;
        $reponse=$bdd->query($requeteInsert) ;
        echo "Une ardoise pour $prenom d'un montant de $montant € a bien été ajoutée" ;
        header("Refresh:3 ; url=ardoise.php")  ; 
        }
    } else {
        echo "Merci de renseigner toutes les infos svp" ;
        header("Refresh:3 ; url=ardoise.php")  ; 
    } 

}

?>