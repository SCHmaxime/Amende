<?php

session_start() ;
require_once('bdd.php') ;
$id=$_GET['id'] ;

if (!empty($_SESSION['admin'])) {

    if ((!empty($_GET['newardoise']))&&($_GET['newardoise']!=0)) {
        $newardoise=$_GET['newardoise'] ;
        $requete="UPDATE ardoise SET montant='$newardoise' WHERE id_ardoise='$id'" ;
        $reponse=$bdd->query($requete) ;
        echo "La nouvelle ardoise est de ".$newardoise." €" ;
        header("Refresh:3 ; url=form_modifier_ardoise.php")  ;
    } else {
        echo "Merci de renseigner un montant et/ou superieure a 0 euros" ;
    }

}

?>