<!DOCTYPE html>
<head>
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


    $query="INSERT INTO treballador (dnitreballador,nom,telefon,mail,provincia,pais,salari,horari,fkidcategoria) 
    VALUES('$dni','$nom','$telefon','$mail','$provincia','$pais','$salari','$horari','$categoria');";
    $result= mysqli_query($dbh,$query);

    if($result){
        header('Location: ../index.php');
    }else{
        echo mysqli_error($dbh);
    }
    
?>
</head>