<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM sanpham WHERE idsp='".$id."'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
?>


    <div class="title__main">
        <span style="font-weight: 500; color: rgb(160, 160, 175);"><a style="font-weight: 300; color: black;"
                href="index.php">Trang chủ</a> > Chi tiết sản phẩm</span>
        <h1 class="tilte__main-big">Chi tiết sản phẩm</h1>
        <p class="tilte__main-small"></p>
    </div>
    <div class="main-detail">
        <div class="img-main">
            <img src="image/<?php echo $row['img']?>" alt="photo" width="100%" height="100%" style="object-fit: cover;">
        </div>
        <div class="txt-choose-main">
            <div class="name-main">
                <h3><?php echo $row['namesp']?></h3>
                <h3>Giá: <span class="price-red"><?php echo $row['price']?><small>đ</small></span></h3>
            </div>
            <div class="choose-color">
                <span>Màu sắc: <?php echo $row['color']?></span>
            </div>
            <div class="choose-number">
                <span>Số lượng hàng: <?php echo $row['quantity']?></span>
            </div>
            <div class="btn-buy">
                <a href="./chucnang/giohang/themhang.php?id_sp=<?php echo $row['idsp']?>&dongia=<?php  echo $row['price']?>"><button>Đặt mua</button></a>
            </div>
        </div>
    </div>
    <div id="details">
        <div class="details">
            <h2>Thông tin chi tiết</h2>
            <table>
                <tr>
                    <th>Thương hiệu</th>
                    <td><?php echo $row['trademark']?></td>
                </tr>
                <tr>
                    <th>Xuất xứ</th>
                    <td><?php echo $row['origin']?></td>
                </tr>
            </table>
        </div>
        <div class="details-1">
            <h2>Mô tả sản phẩm</h2>
            <ul>
                <?php echo $row['description']?>
            </ul>
        </div>
    </div>

