<!DOCTYPE html>  
<title>Index</title>


<head>
<?php include "includes/head.php";
?>
<?php include "includes/header.php";
?>


</head>
<body>
    <header>
        
    </header>
    <section>
        <div>
            <h1>Bar</h1>
            <h2>Clients</h2>
            <img src="img/imgbar.jpg" width="400" height="250">
            <h2>Aqui el teu clients</h2>
        </div>
    </section>
    <section>
    <table>
       <thead>
          <tr>
             <td><h3>DNI</h3></td>
             <td><h3>NOM</h3></td>
             <td><h3>TELEFON</h3></td>
             <td><h3>MAIL</h3></td>
             </tr>
             </thead>
             <tbody>
                <?php
                 $query = "SELECT * FROM treballador";
                 $result = mysqli_query($dbh, $query);
                 while ($row = mysqli_fetch_assoc($result)) {
                 echo "<tr>
                 <td>".$row['dnitreballador']."</td>
                 <td>".$row['nom']."</td>
                 <td>".$row['telefon']."</td>
                 <td>".$row['mail']."</td>
                 </tr>";
                 }
                 ?>
</tbody>
</table>

    </section>
    <?php include "includes/footer.php";
?>
</body>

</html>