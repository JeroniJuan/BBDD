<!DOCTYPE html>
<html>
<title>Categories</title>

<body>
    <?php include "includes/head.php";
    ?>
    <?php include "includes/header.php";
    ?>


    <h1>Proveidors de l'empresa</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <td>
                    <h3>ID</h3>
                </td>
                <td>
                    <h3>NOM</h3>
                </td>
                <td>
                    <h3>RANG</h3>
                </td>
                <td>
                    <h3>SOU</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/coin</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="12" cy="12" r="9"></circle>
   <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1"></path>
   <path d="M12 6v2m0 8v2"></path>
</svg>
</svg>
                </td>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM categoria";
            $result = mysqli_query($dbh, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                 <td>" . $row['idcategoria'] . "</td>
                 <td>" . $row['nom'] . "</td>
                 <td>" . $row['rang'] . "</td>
                 <td>" . $row['sou'] . "</td>
                 </tr>";
            }
            ?>
        </tbody>

        <div>
            <?php include "includes/footer.php";
            ?>
        </div>

</body>

</html>