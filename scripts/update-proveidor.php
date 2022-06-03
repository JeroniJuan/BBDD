<!DOCTYPE html>
<head>
    <?php

    include '../includes/database.php';

$idproveidor = $_POST['idproveidor'];
$nom = $_POST['nom'];
$ubicacio = $_POST['ubicacio'];
$cp = $_POST['cp'];
$provincia = $_POST['provincia'];
$pais = $_POST['pais'];
$telefon = $_POST['telefon'];
$gmail = $_POST['gmail'];


    $query="UPDATE proveidor SET nom = '$nom', ubicacio = '$ubicacio', cp = '$cp', provincia = '$provincia', pais = '$pais', telefon = '$telefon', gmail = '$gmail' 
    WHERE idproveidor = '$idproveidor';";
    $result= mysqli_query($dbh,$query);

    if($result){
        header('Location: ../proveidors.php');
    }else{
        echo mysqli_error($dbh);
    }
    
?>
</head>