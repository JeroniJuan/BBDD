<?php

include '../includes/database.php';


$idventa = $_GET['id'];

$query = "DELETE FROM treballador WHERE id = '$idventa'";
$result = mysqli_query($dbh, $query);

if ($result) {
    header('Location: ../index.php');
} else {
    echo mysqli_error($dbh);
}
