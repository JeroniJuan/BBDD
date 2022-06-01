<!DOCTYPE html>
<head>
    <?php

    include '../includes/database.php';


$cost = $_POST['cost'];
$data_venta = $_POST['data_venta'];



    $query="INSERT INTO venta (cost, data_venta) 
    VALUES('$cost','$data_venta');";
    $result= mysqli_query($dbh,$query);

    if($result){
        header('Location: ../venta.php');
    }else{
        echo mysqli_error($dbh);
    }
    
?>
</head>