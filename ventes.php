<!DOCTYPE html>
<html>

<head>
    <?php include "includes/head.php";
    ?>
    <?php include "includes/header.php";
    ?>


</head>

<body class="p-3 mb-2 bg-dark text-white">
>
<section>
        <table class="table table-dark table-hover table-bordered border-light">
            <thead>
                <tr>
                    <td>
                        <h3>ID</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-id-badge-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/id-badge-2</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M7 12h3v4h-3z"></path>
   <path d="M10 6h-6a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h16a1 1 0 0 0 1 -1v-12a1 1 0 0 0 -1 -1h-6"></path>
   <rect x="10" y="3" width="4" height="5" rx="1"></rect>
   <path d="M14 16h2"></path>
   <path d="M14 12h4"></path>
</svg>
                    </td>
                    <td>
                        <h4>Nom</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/user</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="12" cy="7" r="4"></circle>
   <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </td>
                    <td>
                        <h4>ID Venta</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-businessplan" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/businessplan</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <ellipse cx="16" cy="6" rx="5" ry="3"></ellipse>
   <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
   <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
   <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
   <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
   <path d="M5 15v1m0 -8v1"></path>
</svg>
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