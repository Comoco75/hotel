<?php
try{
    $user = "root";
    $pass = "";
    $bdd = new PDO('mysql:host=localhost;dbname=hotel', $user, $pass);
    
}catch(PDOException $e){
    print "Erreur! Échec de la connexion:" . $e->getMessage() .
    "<br/>";
    die();
}
?>