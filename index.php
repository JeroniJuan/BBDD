<!DOCTYPE html>
<title>Index</title>


<head>
    <?php include "includes/head.php";
    ?>
    <?php include "includes/header.php";
    ?>
</head>

<body class="p-3 mb-2 bg-warning bg-gradient text-dark">
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
                        <h3>TELEFON</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/phone</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
</svg>
                    </td>
                    <td>
                        <h3>MAIL</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/at</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="12" cy="12" r="4"></circle>
   <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
</svg>
                    </td>
                    <td>
                        <h3>CATEGORIA</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-writing" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/writing</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M20 17v-12c0 -1.121 -.879 -2 -2 -2s-2 .879 -2 2v12l2 2l2 -2z"></path>
   <path d="M16 7h4"></path>
   <path d="M18 19h-13a2 2 0 1 1 0 -4h4a2 2 0 1 0 0 -4h-3"></path>
</svg>
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