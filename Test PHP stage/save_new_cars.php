<?php
session_start();
require_once 'config.php';

if (isset($_POST['voiture']) && isset($_POST['modele']) && isset($_POST['description']) && isset($_POST['couleur']) && isset($_POST['capacite']) && isset($_POST['prix'])) {
    $nom = htmlspecialchars($_POST['voiture']);
    $modele = htmlspecialchars($_POST['modele']);
    $description = htmlspecialchars($_POST['description']);
    $couleur = htmlspecialchars($_POST['couleur']);
    $capacite = htmlspecialchars($_POST['capacite']);
    $prix = htmlspecialchars($_POST['prix']);
    $id = $_SESSION['user'];

    if (isset($_FILES['image'])) {
        $img_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_explode = explode(".",  $img_name);
        $img_ext = end($img_explode);
        $extentions = ['png', 'jpg'];
        if (in_array($img_ext, $extentions) === true) {
            if(move_uploaded_file($tmp_name,"img/".$img_name)){
                $insert = $bdd->prepare('INSERT INTO voiture(Nomv, img, description, Capacite, Modele, Couleur,prix_location,idProprio) VALUES (:nom, :img, :description, :capacite, :modele, :couleur,:prix,:id)');
            $insert->execute(array(
                'nom' => $nom,
                'img' => $img_name,
                'description' => $description,
                'couleur' => $couleur,
                'modele' => $modele,
                'capacite' => $capacite,
                'prix' => $prix,
                'id' => $id
            ));
            header('Location: proprio.php?id=' . $_SESSION['user']);
        }
            }
            
        
    }
}
