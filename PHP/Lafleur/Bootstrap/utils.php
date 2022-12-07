<?php
function cnx(){
    $connexion = mysqli_connect("localhost","root","Bl@N6uY6_0_0","lafleur");
    if($connexion){
        mysqli_set_charset ($connexion,"utf8");
    }
    else{
        echo "problème à la connexion <br />";
    }
    return $connexion;
}

?>