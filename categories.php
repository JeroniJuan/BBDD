<!DOCTYPE html>
<html>
<title>Categories</title>

<body>
    <?php include "includes/head.php";
    ?>
    <?php include "includes/header.php";
    ?>


    <h2>Proveidors de l'empresa</h2>
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