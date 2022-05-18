<?php

include '../includes/database.php';


$dni = $_GET['dnitreballador'];

$query = "DELETE FROM treballador WHERE dnitreballador = '$dni'";
$result = mysqli_query($dbh, $query);

if ($result) {
    header('Location: ../index.php');
} else {
    echo mysqli_error($dbh);
}
