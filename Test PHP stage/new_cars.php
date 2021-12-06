<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une voiture</title>
    <link rel="stylesheet" href="css/style_sign_in.css">
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Nouvelle voiture</header>
            <form action="save_new_cars.php" method="POST" enctype="multipart/form-data">
                <div class="name-details">
                    <div class="field input">
                        <label>Nom de la voiture</label>
                        <input type="text" placeholder="Nom de la voiture" name ="voiture">
                    </div>
                    <div class="field input">
                        <label>Modèle</label>
                        <input type="text" placeholder="Modele de la voiture" name="modele">
                    </div>
                </div>
                <div class="field input">
                        <label>Description</label>
                        <input type="text" placeholder="Description de la voiture" name="description">
                    </div>
                <div class="field input">
                        <label>Couleur</label>
                        <input type="text" placeholder="Couleur de la voiture" name="couleur">
                    </div>
                    <div class="field input">
                        <label>Capacité</label>
                        <input type="text" placeholder="Capacité" name="capacite">
                    </div>
                    <div class="field input">
                        <label>Prix de Location</label>
                        <input type="text" placeholder="Prix" name="prix">
                    </div>
                <div class="field image">
                    <label>Selectionner une image</label>
                    <input type="file" name="image">
                </div>
                <div class="field button">
                    <input type="submit" value="Enrégistrer">
                </div>
            </form>
        </section>
    </div>
</body>

</html>