<?php
include_once "bdconnect.php";

$brand = $_POST["brand"];
$model = $_POST["model"];
$hp = $_POST["hp"];
$transmission = $_POST["transmission"];
$body = $_POST["body"];
$price = $_POST["price"];
$color = $_POST["color"];
$img = $_FILES["img"]["name"];

$req = mysqli_query($link, "INSERT INTO `cars` (`id`, `brand`, `model`, `hp`, `transmission`, `body`, `price`, `color`, `img`) VALUES (NULL, '$brand', '$model', '$hp', '$transmission', '$body', '$price', '$color', '$img')");
if ($req) {
    move_uploaded_file($_FILES["img"]["tmp_name"],"img/".$img);
    header("Location: admin-panel.php");
}

else {
    echo "произошла ошибка, попробуйте еще раз";
}

?>