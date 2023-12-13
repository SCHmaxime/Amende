<?php

session_start() ;
require_once('bdd.php') ;
$id=$_GET['id'] ;

$requete="SELECT prenom , montant FROM ardoise WHERE id_ardoise=$id";
$reponse=$bdd->query($requete) ;
        
        foreach ($reponse as $value) {
            $prenom=$value['prenom'] ;
            $ardoise=$value['montant'] ;
        }

$requete="DELETE FROM ardoise WHERE id_ardoise='$id'" ;
$reponse=$bdd->query($requete) ;

echo "L'ardoise de l'utilisateur ".$prenom." d'un montant de ".$ardoise."€ a bien été suprimée" ;
header("Refresh:3 ; url=index.php")  ;

?>