<!DOCTYPE html>
<html>

    <body>
    <?php include "includes/head.php";
?>

<?php include "includes/header.php";
?>
        <div>
            <header> <h2>Formulari1</h2> </header>
                
                <form method="get"> 
                <div>
                    <label>Texto</label>
                         <input type="text" name="texto" placeholder="cosa" minlength="15"/>
                </div>
                <div>
                    <label>Data</label>
                        <input type="data" placeholder="AAAA/MM/DD"/>
                </div>
                <div>
                    <label>telefon</label>
                        <input type="tel" name="telefon" placeholder="0000000"/>
                </div>
                    <label>Email</label>
                        <input type="email" placeholder="mail"/>
                </div>
                <div>
                    <input type="button" value="boton"/>
                </div>
                </form>
        </div>
        <div>
        </div>
    </body>
    <footer></footer>
</html>