<!DOCTYPE html>
<html>
<title>Proveidors</title>

<body>
    <?php include "includes/head.php";
    ?>
    <?php include "includes/header.php";
    ?>

<section>
    <h1>Proveïdors de l'empresa</h1>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <td>
                    <h3>ID</h3>
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
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM proveidor";
            $result = mysqli_query($dbh, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                 <td>" . $row['idproveidor'] . "</td>
                 <td>" . $row['nom'] . "</td>
                 <td>" . $row['telefon'] . "</td>
                 <td>" . $row['gmail'] . "</td>
                 </tr>"; }
            ?>
        </tbody>

        </section>
        <footer>
        <?php include "includes/footer.php";
        ?>
        </footer>
</body>

</html>