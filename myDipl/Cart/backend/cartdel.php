<?php
$connect = mysqli_connect("localhost", "root", "123456", "workshop");



if (isset($_POST['id_prod'])) {

    $id_prod = $_POST['id_prod'];
    $delete = mysqli_query($connect, "DELETE FROM `shopcart` WHERE `shopcart`.`id_prod` = $id_prod");
}
if ($delete) {

    header("Location: {$_SERVER['HTTP_REFERER']}");
} else {
    echo "chto to poshlo ne tak";
}

exit;
