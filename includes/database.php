<?php

$dbh = mysqli_connect('localhost', 'root', '');
if (!$dbh) {
echo "Error db_connect: error en mysqli_connect user: (mal usuario/password?)<br>";
die;
}

if (!mysqli_select_db($dbh,'barcarlos')) {
echo "Error db_connect: error en mysqli_select_db: _BBDD_NAME<br>";
die;
}
;?>