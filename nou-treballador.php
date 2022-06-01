<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>

<?php
$treballador = null;
if (isset($_GET['dnitreballador'])) {
    $dni_treballador = $_GET['dnitreballador'];
    $query = "SELECT * FROM treballador WHERE dnitreballador = '$dni_treballador' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $treballador = mysqli_fetch_assoc($result);
}

$action = 'scripts/insertar-treballador.php';
if ($treballador != null) {
    $action = 'scripts/update-treballador.php';
}
?>

<body>

    <div class="container">

        <section class="mb-5 mt-5">
            <?php
            include 'includes/header.php';
            ?>
            <h1 class="mb-5 mt-5">
                <?php
                if ($treballador == null) {
                    echo 'NOU TREBALLADOR';
                    echo "<title>Nou Treballador</title>";
                } else {
                    echo 'EDITA EL TREBALLADOR';
                    echo "<title>Edita el Treballador</title>";
                }
                ?>
            </h1>

        </section>

        <section>

            <form action="<?= $action ?>" method="POST">
                <div class="form-group">
                    <label for="exampleInputPassword1">DNI</label>
                    <input type="text" value="<?= $treballador['dnitreballador']; ?>" name="dnitreballador" class="form-control" placeholder="00000000X" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input value="<?= $treballador['mail']; ?>" type="email" name="mail" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nom i Llinatges</label>
                    <input value="<?= $treballador['nom']; ?>" type="text" name="nom" class="form-control" placeholder="Nom i LLinatges" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Telefon</label>
                    <input value="<?= $treballador['telefon']; ?>" type="text" name="tel" class="form-control" placeholder="Telefon" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Pais</label>
                    <input type="text" value="<?= $treballador['pais']; ?>" name="pais" class="form-control" placeholder="Pais" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Provincia</label>
                    <input type="text" value="<?= $treballador['provincia']; ?>" name="provincia" class="form-control" placeholder="Provincia" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Salari</label>
                    <input type="text" value="<?= $treballador['salari']; ?>" name="salari" class="form-control" placeholder="Salari" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Horari</label>
                    <input type="text" value="<?= $treballador['horari']; ?>" name="horari" class="form-control" placeholder="Horari" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Categoria</label>
                    <select name="categoria" value="categoria">
                        <?php
                        $query = "SELECT idcategoria FROM categoria";
                        $result = mysqli_query($dbh, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo  "<option>" . $row['idcategoria'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <?php
                if ($treballador) {
                    echo "<input type='hidden' value='" . $treballador['dnitreballador'] . "' name='dnitreballador'>";
                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>


        </section>

    </div>
</body>

</html>