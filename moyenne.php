
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
            <li class="nav-item">
                <a class="nav-link" href="formulaire.php">Formulaire <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Notes</a>
            </li>
            </ul>
        </div>
    </nav>
    <?php

$host = "localhost"; // ou 127.0.0.1
$user = "root"; 
$bd = "finelia"; // le nom de votre base de données
$mdp = "";
$co = mysqli_connect($host , $user , $mdp, $bd) or
die("erreur");

$idPrece=0;
$num=0;
$sql_boutique = "Select * FROM etudiant E, note N, matiere M Where E.idEtudiant=N.idEtudiant AND N.idMatiere=M.idMatiere";
      $sql_res_boutique= mysqli_query($co,$sql_boutique);
      if(mysqli_num_rows($sql_res_boutique) != 0){
        while($row=mysqli_fetch_assoc($sql_res_boutique))
          {

              $idetudiant = $row['idEtudiant'];
            if($idPrece!=$idetudiant){
            $nom = $row['nomEtudiant'];
            $prenom = $row['prenomEtudiant'];
            $num=$num+1;
            $ttNote=0;
            $ttCoef=0;
            $moyenne=0;
            $idPrece=$idetudiant;
            $sql_moyenne = "Select resultat, coefficient FROM note N, matiere M Where N.idMatiere=M.idMatiere AND idEtudiant='{$idPrece}'";
                $sql_res_moyenne= mysqli_query($co,$sql_moyenne);
                if(mysqli_num_rows($sql_res_moyenne) != 0){
                    while($row=mysqli_fetch_assoc($sql_res_moyenne))
                    {
                        $note = $row['resultat'];
                        $coef = $row['coefficient'];
                        $ttNote +=  $note*$coef;
                        $ttCoef += $coef;
                        $moyenne = $ttNote/$ttCoef;

                        
                    
                    }}
            
            


?>
        <table class="table">
        <!--<thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Moyenne</th>
            </tr>
        </thead>-->
        <tbody>
            <tr>
            <th scope="row"><?php echo $num?></th>
            <td><?php echo $prenom?></td>
            <td><?php echo $nom?></td>
            <td><?php echo $moyenne?></td>
            </tr>
        
        </tbody>
        </table>


    </body>
<?php
}
}
}


?>
</html>
