<?php

try{
    $base= new PDO('mysql:host=localhost;dbname=polytech','root','root');
   
}
catch(Exception $e){
    die('erreur'.$e->getMessage());
}


?>
