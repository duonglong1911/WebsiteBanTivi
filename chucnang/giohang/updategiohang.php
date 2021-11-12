<?php
include_once('../../connect.php');
    $id_update = $_GET['id_update'];
    $number = $_GET['number'];
    $price = $_GET['price'];
    $sql1 = "SELECT * FROM `order` WHERE idorder = '".$id_update."'";
    $result1 = mysqli_query($connect, $sql1);
    $row = mysqli_fetch_array($result1);
    $totalprice = $number * $price;
    $sql = "UPDATE `order` SET `quantity` = '$number', `totalprice` = '$totalprice'  WHERE `order`.`idorder` = '$id_update'";
    $result = mysqli_query($connect, $sql);
    header('location: ../../index.php?page_layout=giohang');
?>