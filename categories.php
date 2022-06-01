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
                    <h2>ID</h2>
                </td>
                <td>
                    <h2>NOM</h2>
                </td>
                <td>
                    <h2>RANG</h2>
                </td>
                <td>
                    <h2>SOU</h2>
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