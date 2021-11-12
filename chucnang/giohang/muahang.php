<?php
session_start();
    include_once('../../connect.php');
    $user = $_SESSION['user'];
    $sql2= "SELECT * FROM user WHERE name = '$user'";
    $query2 = mysqli_query($connect,$sql2);
    $row2 = mysqli_fetch_array($query2);
    $roww = $row2['iduser'];
    $sql3 = "SELECT * FROM `order` WHERE state = 1 and iduser = '$roww'";
    $result3 = mysqli_query($connect, $sql3);
    while($row = mysqli_fetch_array($result3)){
        $roww1 = $row['idsp'];
        $roww2 = $row['quantity'];
        $sql = "UPDATE `order` SET `state` = 2 WHERE state = 1 AND iduser = '$roww'";
        $result = mysqli_query($connect, $sql);
        $sql4= "SELECT * FROM sanpham WHERE idsp = '$roww1'";
        $query4 = mysqli_query($connect,$sql4);
        while($row3 = mysqli_fetch_array($query4)){
            
            if($result){
                $number = $row3['quantity'] -$roww2;
                $sql1 = "UPDATE sanpham SET `quantity` = '$number' WHERE idsp = '$roww1'";
                $result1 = mysqli_query($connect, $sql1);
            }
        }
        
    }  
    header('location: ../../index.php?page_layout=giohang');
?>