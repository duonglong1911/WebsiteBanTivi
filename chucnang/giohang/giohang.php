<?php
$user = $_SESSION['user'];
$sql3= "SELECT * FROM user WHERE name = '$user'";
$query3 = mysqli_query($connect,$sql3);
$row2 = mysqli_fetch_array($query3);
$roww = $row2['iduser'];
$sql = "SELECT * FROM `order` WHERE state = 1 and iduser = '$roww'";
$result = mysqli_query($connect, $sql);
?>


    <div class="title__main">
        <span style="font-weight: 500; color: rgb(160, 160, 175);"><a style="font-weight: 300; color: black;"
                href="index.php">Trang chủ</a> > Giỏ hàng</span>
        <h1 class="tilte__main-big">Giỏ hàng</h1>
        <p class="tilte__main-small"></p>
    </div>
    <div class="post__main">
        <table class="table-giohang">
            <?php 
            while($row = mysqli_fetch_array($result)){
                $ro = $row['idsp'];
                $sql1 = "SELECT * FROM sanpham WHERE idsp = '$ro'";
                $result1 = mysqli_query($connect, $sql1);
            while($row1 = mysqli_fetch_array($result1)){
            ?>
            <tr>
                <td class="img-table td-giohang td-giohang-2"><img src="image/<?php echo $row1['img']?>" alt="" width="100%" height="100%"></td>
                <td class="td-giohang"><p><?php echo $row1['namesp']?></p></td>
                <td class="td-giohang td-giohang-1"><p><?php echo $row1['color']?></p></td>
                <td class="td-giohang td-giohang-1">
                    <div class="number-giohang">
                        <div class="txt-number-giohang">
                            <p><?php echo $row['quantity']?></p>
                            <p style="font-size: 12px; font-weight: 800">&#8744;</p>
                        </div>
                        <ul class="list-child-giohang">
                            <?php
                                for($i = 1; $i <= $row1['quantity']; $i++){
                                    echo '
                                        <li><a href="./chucnang/giohang/updategiohang.php?id_update='.$row['idorder'].'&number='.$i.'&price='.$row1['price'].'">'.$i.'</a></li>
                                    ';
                                }
                            ?>
                        </ul>
                    </div>
                </td>
                <td class="td-giohang td-giohang-1"><p><?php echo $row['totalprice']?>đ</p></td>
                <td class="td-giohang td-giohang-1"><a href="./chucnang/giohang/deletegiohang.php?id_giohang=<?php echo $row['idorder'] ?>"><button class="btn-delete-giohang">delete</button></a></td>
            </tr>
            <?php }}?>
        </table>
        <div>
            <p style="margin-top: 10px">Tổng: <?php
                $sql2 = "SELECT SUM(totalprice) AS 'tongtien' FROM `order` WHERE state = 1 AND iduser = '$roww'";
                $result2 = mysqli_query($connect, $sql2);
                $row = mysqli_fetch_array($result2);
                echo $row['tongtien'];
            ?>đ</p>
            <a href="./chucnang/giohang/muahang.php"><button class="btn-delete-giohang mua-hang">Mua hàng</button></a>
        </div>
    </div>
