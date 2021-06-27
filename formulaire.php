<?php
$host = "localhost"; // ou 127.0.0.1
$user = "root"; 
$bd = "finelia"; // le nom de votre base de données
$mdp = "";
$co = mysqli_connect($host , $user , $mdp, $bd) or
die("erreur");




?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
    </head>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Finelia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Formulaire <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="moyenne.php">Notes</a>
            </li>
            </ul>
        </div>
    </nav>

    <form method="post" action="test.php">
        <div class="form-group">
            <label>Nom de l'élève</label>
            <input type="text" class="form-control" name="nomEleve" placeholder="Veuillez rentrer le nom de l'élève">
        </div>
        <div class="form-group">
            <label>Prénom de l'élève</label>
            <input type="text" class="form-control" name="prenomEleve" placeholder="Veuillez rentrer le nom de l'élève">
        </div>
        <div class="form-group">
            <label>Note de l'élève</label>
            <input type="text" class="form-control" name="note" placeholder="Veuillez rentrer la note de l'élève (0-20)">
        </div>
        <div class="form-group">
            <label>Coefficient</label>
            <input type="text" class="form-control" name="coef" placeholder="Veuillez rentrer le coefficient de la note">
        </div>
        <input type="submit" class="form-control" style=" color: #74E743;" value="Valider changements">
    </form>

    </body>
</html>
