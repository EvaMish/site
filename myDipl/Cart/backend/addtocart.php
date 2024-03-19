<?php
session_start();
$id_user  = $_SESSION['id_us'];
$id_prod = $_POST['id_prod']; //получаем id товара
$connect = mysqli_connect("localhost", "root", "123456", "workshop");
$result  = mysqli_query($connect, "SELECT `id_prod` FROM `shopcart` WHERE `id_prod` = $id_prod");

if (isset($_SESSION['id_us'])) {
  if (mysqli_num_rows($result)) {
  } else {
    mysqli_query($connect, "INSERT INTO `shopcart` (`id_us`,`id_prod`) VALUES ('$id_user','$id_prod')");
  }
}
