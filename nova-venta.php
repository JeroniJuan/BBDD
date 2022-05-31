<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>

<?php
$venta = null;
if (isset($_GET['dnitreballador'])) {
    $idventa = $_GET['dnitreballador'];
    $query = "SELECT * FROM venta WHERE id = '$idventa' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $treballador = mysqli_fetch_assoc($result);
}

$action = 'scripts/insertar-venta.php';
if ($venta != null) {
    $action = 'scripts/update-venta.php';
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
                if ($idventa == null) {
                    echo 'NOVA VENTA';
                    echo "<title>Nova Venta</title>";
                } else {
                    echo 'EDITA LA VENTA';
                    echo "<title>Edita La Venta</title>";
                }
                ?>
            </h1>

        </section>

        <section>

            <form action="<?= $action ?>" method="POST">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Cost</label>
                    <input value="<?= $venta['cost']; ?>" type="text" name="cost" class="form-control" aria-describedby="emailHelp" placeholder="$" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Data Venta</label>
                    <input value="<?= $venta['data_venta']; ?>" type="text" name="data_venta" class="form-control" placeholder="0000-00-00" required>
        
                    </select>
                </div>
                <?php
                if ($venta) {
                    echo "<input type='hidden' value='" . $venta['idventa'] . "' name='idventa'>";
                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>


        </section>

    </div>
</body>

</html>