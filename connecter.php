<?php

session_start() ;
require_once('bdd.php') ;

if ((!empty($_GET['user']))&&(!empty($_GET['mdp']))) {
$user=$_GET['user'] ;
$mdp=$_GET['mdp'] ;
$requeteUser="SELECT * FROM admin WHERE login='$user' " ;
$reponseUser=$bdd->prepare($requeteUser) ;
$reponseUser->execute() ;
$data=$reponseUser->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $value) {
    $userBDD=$value['login'] ;
    $mdpBDD=$value['password'] ;
    $_SESSION['id_user']=$value['id_user'] ;
}


$mdpVerify=password_verify($mdp , $mdpBDD) ;


    if (($mdpVerify)&&($user===$userBDD)) {
        $_SESSION['admin']=true ;
        // $_SESSION['id_user']=$id ;
        $_SESSION['user']=$user ;
        echo "Vous etes bien connecté en tant qu'admin" ;
        header("Refresh:3 ; url=index.php")  ;  
    } else {
        $_SESSION['admin']=false ;
        // $_SESSION['id_user']=$id ;
        echo "Vous etes bien connecté en tant qu'utilisateur" ;
        header("Refresh:3 ; url=index.php")  ; 
    }
} else {
    echo "Merci de renseigner toutes les infos svp" ;
    header("Refresh:3 ; url=form_connecter.php")  ; 
}



?>