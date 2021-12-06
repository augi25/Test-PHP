<?php   
    require_once 'config.php';

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass_retype'])){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['pass']);
    $mdp_retype = htmlspecialchars($_POST['pass_retype']);

    $check=$bdd->prepare('SELECT email FROM client WHERE email=?');
    $check->execute(array($email));
    $userexist=$check->rowCount();

    if($userexist == 0){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            if($mdp == $mdp_retype){
                $mdp =hash('sha256',$mdp);
                $insert= $bdd->prepare('INSERT INTO client(nom,prenom,email,MDP) VALUES (:nom, :prenom, :email, :mdp)');
                $insert->execute(array(
                    'nom'=> $nom,
                    'prenom' =>$prenom,
                    'email'=> $email,
                    'mdp'=> $mdp
                ));header('Location:sign_up.php');
            }else {
                echo "Les mots de passes ne correspondent";
            }
        }
    }else {
        echo "L'adresse email que vous avez entrez exite déjà";
    }

}

