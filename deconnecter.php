<?php

session_start() ;

session_destroy() ;

echo "Vous etes deconnecté" ;
header("Refresh:3 ; url=index.php")  ;

?>