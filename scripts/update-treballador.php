<!DOCTYPE html>
    <?php

    include '../includes/database.php';

$dni = $_POST['dnitreballador'];
$nom = $_POST['nom'];
$telefon = $_POST['tel'];
$mail = $_POST['mail'];
$provincia = $_POST['provincia'];
$salari = $_POST['salari'];
$horari = $_POST['horari'];
$categoria = $_POST['categoria'];


    $query="UPDATE treballador SET dnitreballador = '$dni', nom = '$nom', mail = '$mail', provincia = '$provincia', salari = '$salari', telefon = '$telefon', horari = '$horari', fkidcategoria = '$categoria'
    WHERE dnitreballador = '$dni'";
    $result= mysqli_query($dbh,$query);

    if($result){
        header('Location: ../index.php');
    }else{
        echo mysqli_error($dbh);
    }