<!DOCTYPE html>
<html>
<title>Categories</title>

<body>
    <?php include "includes/head.php";
    ?>
    <?php include "includes/header.php";
    ?>


    <h1>Categories de l'empresa</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <td>
                    <h3>ID</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-id" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/id</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <rect x="3" y="4" width="18" height="16" rx="3"></rect>
   <circle cx="9" cy="10" r="2"></circle>
   <line x1="15" y1="8" x2="17" y2="8"></line>
   <line x1="15" y1="12" x2="17" y2="12"></line>
   <line x1="7" y1="16" x2="17" y2="16"></line>
</svg>
                </td>
                <td>
                    <h3>NOM</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/user</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="12" cy="7" r="4"></circle>
   <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
</svg>
                </td>
                <td>
                    <h3>RANG</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/arrow-narrow-up</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <line x1="12" y1="5" x2="12" y2="19"></line>
   <line x1="16" y1="9" x2="12" y2="5"></line>
   <line x1="8" y1="9" x2="12" y2="5"></line>
</svg>
</svg>
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

    </table>
    <div>
            <?php include "includes/footer.php";
            ?>
        </div>
        
</body>



</html>