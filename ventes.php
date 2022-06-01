<!DOCTYPE html>
<html>

<head>
    <?php include "includes/head.php";
    ?>
    <?php include "includes/header.php";
    ?>


</head>

<body>
<section>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <td>
                        <h3>ID</h3>
                    </td>
                    <td>
                        <h4>Nom</h4>
                    </td>
                    <td>
                        <h4>IDVenta</h4>
                    </td>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT producte.idproducte AS id, producte.nom, VENTA_PRODUCTE.fkidventa, VENTA_PRODUCTE.fkidproducte
                FROM producte
                INNER JOIN VENTA_PRODUCTE
                WHERE producte.idproducte = VENTA_PRODUCTE.fkidproducte";
                $result = mysqli_query($dbh, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>, 
                 <td>" . $row['id'] . "</td>
                 <td>" . $row['nom'] . "</td>
                 <td>" . $row['fkidventa'] . "</td>
                 </tr>";
                }
                ?>
            </tbody>
        </table>

</body>
<footer>
    <?php include "includes/footer.php"
    ?>
</footer>

</html>