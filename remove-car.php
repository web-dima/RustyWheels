<?php
    include_once "bdconnect.php";
    $str = $_POST["remove"];
    $id = explode("/",$str)[0];
    $img = explode("/",$str)[1];
    $res_del = mysqli_query($link,"DELETE FROM `cars` WHERE `id` = '$id'");
    if ($res_del) {
        unlink("img/".$img);
        header("Location: admin-panel.php");
    }
    else {
        echo "произошла ошибка, попробуйте еще раз";
    }
?>