<?php

include_once("parameters.php");

 try{

   $bdd = new PDO("mysql:host=$servername;dbname=$databasename", $user, $password);
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }

 catch(Exception $e)
 {
        die("la connection a echouee".$e->getMessage());
 }

 

   ?>
