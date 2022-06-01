<!DOCTYPE html>
<html>
<title>Proveidors</title>

<body>
    <?php include "includes/head.php";
    ?>
    <?php include "includes/header.php";
    ?>

<section>
    <h2>Proveïdors de l'empresa</h2>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/phone</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
</svg>
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