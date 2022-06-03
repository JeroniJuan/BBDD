<?php

include '../includes/database.php';


$idproveidor = $_GET['idproveidor'];

$query = "DELETE FROM proveidor WHERE idproveidor = '$idproveidor'";
$result = mysqli_query($dbh, $query);

if ($result) {
    header('Location: ../proveidors.php');
} else {
    echo mysqli_error($dbh);
}
