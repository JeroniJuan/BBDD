<!DOCTYPE html>  



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
            <h1>Test</h1>
            <p>Test</p>
            <h2>Aqui el teu clients</h2>
        </div>
    </section>
    <section>
    <table>
       <thead>
          <tr>
             <td>DNI</td>
             <td>NOM</td>
             <td>TELEFON</td>
             <td>MAIL</td>
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
    <footer>
        Peu de pagina index
    </footer>
</body>
</html>