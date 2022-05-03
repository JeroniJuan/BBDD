<!DOCTYPE html>
<html>
    <title>Proveidors</title>
    <body>
<?php include "includes/head.php";
?>
<?php include "includes/header.php";
?>
<?php include "includes/footer.php";
?>

<h2>Proveidors de l'empresa</h2>
<table>
       <thead>
          <tr>
             <td>ID</td>
             <td>NOM</td>
             <td>TELEFON</td>
             <td>MAIL</td>
             </tr>
             </thead>
             <tbody>
                <?php
                 $query = "SELECT * FROM proveidor";
                 $result = mysqli_query($dbh, $query);
                 while ($row = mysqli_fetch_assoc($result)) {
                 echo "<tr>
                 <td>".$row['idproveidor']."</td>
                 <td>".$row['nom']."</td>
                 <td>".$row['telefon']."</td>
                 <td>".$row['gmail']."</td>
                 </tr>";
                 }
                 ?>
             </tbody>
    </body>


</html>