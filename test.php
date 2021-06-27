<?php

$host = "localhost"; // ou 127.0.0.1
$user = "root"; 
$bd = "finelia"; // le nom de votre base de données
$mdp = "";
$co = mysqli_connect($host , $user , $mdp, $bd) or
die("erreur");

$nom=$_POST['nomEleve'];
$prenom=$_POST['prenomEleve'];
$coef=$_POST['coef'];
$note=$_POST['note'];
strtoupper($nom);



if(!empty($nom) AND !empty($prenom) AND !empty($coef) AND !empty($note) AND is_numeric($coef) AND is_numeric($note) AND $note>=0 AND $note<=20){
    $sql_etudiant = "Select idEtudiant FROM etudiant Where nomEtudiant='{$nom}' AND prenomEtudiant='{$prenom}'";
                $sql_res_etudiant= mysqli_query($co,$sql_etudiant);
                if(mysqli_num_rows($sql_res_etudiant) != 0){
                    while($row=mysqli_fetch_assoc($sql_res_etudiant))
                    {
                        $id = $row['idEtudiant'];
                    }}
                /*else{
                    mysqli_query($co, "INSERT INTO `etudiant`( `nomEtudiant`, `prenomEtudiant`) VALUES ('$nom','$prenom');") or die ("erreur insertion etudiant");
                    header('location: moyenne.php');  
                }*/


        $sql_coeff = "Select idMatiere FROM matiere Where coefficient='{$coef}'";
                $sql_res_coeff= mysqli_query($co,$sql_coeff);
                if(mysqli_num_rows($sql_res_coeff) != 0){
                    while($row=mysqli_fetch_assoc($sql_res_coeff))
                    {
                        $idCoeff = $row['idMatiere'];
                    }}
                /*else{
                    mysqli_query($co, "INSERT INTO `matiere`( `nomMatiere`, `coefficient`) VALUES ('une matiere',$coef);") or die ("erreur insertion coefficient");
                    header('location: moyenne.php');  
                }*/

    mysqli_query($co, "INSERT INTO `note`( `resultat`, `idEtudiant`, `idMatiere`) VALUES ($note,$id,$idCoeff);") or die ("erreur insertion note");
    header('location: moyenne.php');   
}

else{
    echo "Veuillez bien remplir les champs";
}




?>

