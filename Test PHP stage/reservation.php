<?php
$idV = $_GET['idVoiture'];
require_once 'config.php';
$data = $bdd->prepare('SELECT * FROM voiture WHERE idVoituere = ? ');
$data->execute(array($idV));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarLOCATE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<header class="header">

<a href="" class="logo"> <i class="fas fa-car"></i> CarLOCATE. </a>
<div id="menu-btn" class="fas fa-bars"></div>

</header>
<section class="home" id="home">

    <div class="image">
        <img src="img/img-.jpg" alt="">
    </div>

    <div class="content">
        <h3>Tout roule moins chère avec CarLOCATE.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sed autem vero? Magnam, est laboriosam!</p>

    </div>

</section>
<section class="cars" id="cars">

        <h1 class="heading"> Votre <span>choix</span> </h1>

        <?php
        $check = $data->fetchAll();
        foreach ($check as $dt) { ?>
            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="<?php echo $dt['img'] ?>" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"> <i class="fas fa-calendar"></i> <?php echo $dt['date_pub'] ?> </a>
                            <a href="#"> <i class="fas fa-user"></i> <?php echo $dt['idProprio'] ?></a>
                        </div>
                        <h3><?php echo $dt['Nomv'] ?> </h3>
                        <h3><?php echo $dt['prix_location'] ?> </h3>
                        <p><?php echo $dt['description'] ?>, <?php echo $dt['Couleur'] ?>, <?php echo $dt['Modele'] ?>, <?php echo $dt['Capacite'] ?></p>
                        <a href="<?php echo 'Mes_reservations.php?idVoiture=' . $dt['idVoituere'] . ''; ?>" class="btn"> Reserver <span class="fas fa-chevron-right"></span> </a>
                    </div>
                </div>
            <?php }  ?>
            </div>
            </div>
    </section>

</body>
</html>