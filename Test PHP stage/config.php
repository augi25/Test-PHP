<?php

    try{

        $bdd= new PDO('mysql:host=localhost;dbname=gestlocvoiture;charset=utf8','root','');/*connexion a la base de données*/
        
    }catch(Exception $e){

        die('Erreur'.$e->getMessage());

    }
