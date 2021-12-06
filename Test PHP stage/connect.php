<?php
session_start();
require_once 'config.php';

if (isset($_POST['email']) && isset($_POST['pass'])) /* verifier si les champs inputs exites (1)*/{
    $email = htmlspecialchars($_POST['email']);/*stockage */
    $password = htmlspecialchars($_POST['pass']);

    $password = hash('sha256', $password);/* haché le mot de passe avec l'algorithme */
    var_dump($password);

    $check = $bdd->prepare('SELECT * FROM client WHERE email=? AND MDP=?');/*voir si la personne existe dans notre base de données*/
    
    $check->execute(array($email, $password));/*renseignement de l'email*/
    
    $userexist = $check->rowCount();/*pour verifier si la personne existe dans la table*/

    if ($userexist == 1) {
        $data = $check->fetch();/*enregistrement des données de la base de données dans la variable  data et recherche avec fetch*/
        $_SESSION['user'] = $data['idClient'];
        var_dump($data['MDP']);/*créer une session et mettre en valeur l'id*/
        header('Location:proprio.php?id=' . $_SESSION['user']);/*redirection sur la page de Client/Proprie*/
        /*c'est que la personne exite*/
    }
}
