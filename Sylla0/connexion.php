<?php
    try{
        $con=new PDO('mysql:host=localhost;dbname=salaires','root','');
        //echo "connexion reussie !!!";
    }catch(PDOException $e){
        die("Erreur: ".$e->getMessage());
    }