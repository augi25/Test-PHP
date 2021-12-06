<?php
session_start();
require_once 'config.php';
$data = $bdd->prepare('SELECT * FROM reservations');

$data->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil CarLOCATE.</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-car"></i> CarLOCATE. </a>

        <nav class="navbar">
            <a href="index.php">home</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>
    <section class="home" id="home">

        <div class="image">
            <img src="img/img-.jpg" alt="">
        </div>

        <div class="content">
            <h3>Tout roule moins chère avec CarLOCATE.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sed autem vero? Magnam, est laboriosam!</p>
            <a href="#" class="btn"> Contactez-nous<span class="fas fa-chevron-right"></span> </a>
        </div>

    </section>
    
</body>

</html>