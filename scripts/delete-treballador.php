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


    $query="DELETE FROM treballador WHERE dnitreballador = '$dni'";
    $result= mysqli_query($dbh,$query);

    if($result){
        header('Location: ../index.php');
    }else{
        echo mysqli_error($dbh);
    }