<!DOCTYPE html>
<head>
    <?php

    include '../includes/database.php';


$nom = $_POST['nom'];
$ubicacio = $_POST['ubicacio'];
$cp = $_POST['cp'];
$provincia = $_POST['provincia'];
$pais = $_POST['pais'];
$telefon = $_POST['telefon'];
$gmail = $_POST['gmail'];


    $query="INSERT INTO proveidor (nom,ubicacio,cp,provincia,pais,telefon,gmail) 
    VALUES('$nom','$ubicacio','$cp','$provincia','$pais','$telefon','$gmail');";
    $result= mysqli_query($dbh,$query);

    if($result){
        header('Location: ../proveidors.php');
    }else{
        echo mysqli_error($dbh);
    }
    
?>
</head>