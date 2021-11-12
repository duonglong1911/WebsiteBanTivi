<?php
session_start();
function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $size = strlen( $chars );
    for( $i = 0; $i < $length; $i++ ) {
    $str = $chars[ rand( 0, $size - 1 ) ];
     }
    return $str;
}
include_once('../../connect.php');
$user = $_SESSION['user'];
$sql2 = "SELECT * FROM user WHERE name = '$user'";
	$query2 = mysqli_query($connect,$sql2);
    $row1 = mysqli_fetch_array($query2);
    $my_string = rand_string( 5 );
    $id_sp = $_GET['id_sp'];
    $dongia = $_GET['dongia'];
    $roww = $row1['iduser'];
    $sql1 = "select * from `order` where idsp = '$id_sp' and state = 1 and iduser = '$roww'";
	$query = mysqli_query($connect,$sql1);
	$num_rows = mysqli_num_rows($query);
		if ($num_rows>0) {
				header("location: ../../index.php?page_layout=giohang");
		}else{
        
            $sql = "INSERT INTO `order`(idorder, idsp, quantity, totalprice, state, iduser) VALUES ('$my_string', '$id_sp', 1, '$dongia', 1, '$roww')";
            $result = mysqli_query($connect, $sql);
            header("location: ../../index.php?page_layout=giohang");
		}
    
?>