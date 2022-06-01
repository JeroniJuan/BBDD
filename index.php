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
            <h2>Treballadors</h2>
            <img src="img/imgbar.jpg" width="1300" height="500">
            <h2>Aqui els treballadors</h2>
        </div>
    </section>
    <section>
        <table class="table table-striped table-info">
            <thead>
                <tr>
                    <td>
                        <h3>DNI</h3>
                    </td>
                    <td>
                        <h3>NOM</h3>
                    </td>
                    <td>
                        <h3>TELEFON</h3>
                    </td>
                    <td>
                        <h3>MAIL</h3>
                    </td>
                    <td>
                        <h3>CATEGORIA</h3>
                    </td>
                    <td>
                        <h3>OPCIONS</h3>
                    </td>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT treballador.dnitreballador, treballador.nom, treballador.telefon, treballador.mail, categoria.nom AS categoria
                FROM treballador
                INNER JOIN categoria
                WHERE treballador.fkidcategoria = categoria.idcategoria";
                $result = mysqli_query($dbh, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>, 
                 <td>" . $row['dnitreballador'] . "</td>
                 <td>" . $row['nom'] . "</td>
                 <td>" . $row['telefon'] . "</td>
                 <td>" . $row['mail'] . "</td>
                 <td>" . $row['categoria'] . "</td>
                 <td><a class='btn btn-primary' href='nou-treballador.php?dnitreballador=" . $row['dnitreballador'] . "'>Editar</a>
                 <a class='btn btn-danger' href='scripts/delete-treballador.php?dnitreballador=" . $row['dnitreballador'] . "'>Eliminar</a></td>
                 </tr>";
                }
                ?>
            </tbody>
            <a href="nou-treballador.php">Insertar Nou treballador</a>
        </table>

    </section>
    <?php include "includes/footer.php";
    ?>
</body>

</html>