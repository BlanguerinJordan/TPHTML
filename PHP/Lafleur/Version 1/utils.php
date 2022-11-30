<?php
function cnx(){
    $connexion = mysqli_connect("localhost","root","","lafleur1");
    if($connexion){
        mysqli_set_charset ($connexion,"utf8");
    }
    else{
        echo "problème à la connexion <br />";
    }
    return $connexion;
}

?>