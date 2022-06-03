<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>

<?php
$proveidor = null;
if (isset($_GET['idproveidor'])) {
    $idproveidor = $_GET['idproveidor'];
    $query = "SELECT * FROM proveidor WHERE idproveidor = '$idproveidor' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $proveidor = mysqli_fetch_assoc($result);
}

$action = 'scripts/insertar-proveidor.php';
if ($proveidor != null) {
    $action = 'scripts/update-proveidor.php';
}
?>

<body class="p-3 mb-2 bg-dark bg-gradient text-dark">

    <div class="container">

        <section class="mb-5 mt-5">
            <?php
            include 'includes/header.php';
            ?>
            <h1 class="mb-5 mt-5">
                <?php
                if ($proveidor == null) {
                    echo 'NOU PROVEIDOR';
                    echo "<title>Nou Proveidor</title>";
                } else {
                    echo 'EDITA EL PROVEIDOR';
                    echo "<title>Edita el Proveidor</title>";
                }
                ?>
            </h1>

        </section>

        <section>

            <form action="<?= $action ?>" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">NOM PROVEIDOR</label>
                    <input value="<?= $proveidor['nom']; ?>" type="text" name="nom" class="form-control" aria-describedby="emailHelp" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">UBICACIÓ</label>
                    <input value="<?= $proveidor['ubicacio']; ?>" type="text" name="ubicacio" class="form-control" placeholder="Ubicacio" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">CP</label>
                    <input value="<?= $proveidor['cp']; ?>" type="text" name="cp" class="form-control" placeholder="cp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">PROVINCIA</label>
                    <input value="<?= $proveidor['provincia']; ?>" type="text" name="provincia" class="form-control" placeholder="Provincia" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Pais</label>
                    <input value="<?= $proveidor['pais']; ?>" type="text" name="pais" class="form-control" placeholder="Pais" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Telefon</label>
                    <input value="<?= $proveidor['telefon']; ?>" type="text" name="telefon" class="form-control" placeholder="Telefon" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">gmail</label>
                    <input value="<?= $proveidor['gmail']; ?>" type="email" name="gmail" class="form-control" placeholder="Gmail" required>
                </div>
                <?php 
                if($proveidor){
                    echo "<input type='hidden' value='".$proveidor['idproveidor']."' name='idproveidor'>";

                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>


        </section>

    </div>
</body>

</html>