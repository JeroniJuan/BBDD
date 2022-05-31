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
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <td>
                        <h3>ID</h3>
                    </td>
                    <td>
                        <h3>Nom</h3>
                    </td>
                    <td>
                        <h3>IDVenta</h3>
                    </td>
                    <td>
                        <h3>Opcions</h3>
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
                 <td><a class='btn btn-primary' href='nova-venta.php?dnitreballador=" . $row['id'] . "'>Editar</a></td>
                 <td><a class='btn btn-danger' href='scripts/delete-venta.php?dnitreballador=" . $row['id'] . "'>Eliminar</a></td>
                 </tr>";
                }
                ?>
            </tbody>
            <a href="nova-venta.php">Insertar Nova Venta</a>
        </table>

</body>
<footer>
    <?php include "includes/footer.php"
    ?>
</footer>

</html>