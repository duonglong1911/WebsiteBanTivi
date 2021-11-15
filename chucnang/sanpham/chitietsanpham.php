<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM sanpham WHERE idsp='".$id."'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
?>

    <wrap>
        <div class="title__main mt-5">
            <span style="font-weight: 500; color: rgb(160, 160, 175);"><a style="font-weight: 300; color: black;"
                    href="index.php">Trang chủ</a> > Chi tiết sản phẩm > <?php echo $row['namesp']?></span>
            <h1 class="tilte__main-big">Chi tiết sản phẩm</h1>
            <p class="tilte__main-small"></p>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="detail-image">
                        <img src="image/<?php echo $row['img']?>" alt="photo">
                    </div>
                </div>
                <div class="col-8">
                    <div class="detail__product">
                        <h5 class="detail__product-name"><?php echo $row['namesp']?></h5>
                        <div class="detail__product-price">
                            <h5>Giá: <span><?php echo $row['price']?><small>đ</small></span></h5>
                        </div>
                        <div class="detail__product-info mt-3">
                            <h5>Thông tin chi tiết</h5>
                            <p>Màu sắc:  <span><?php echo $row['color']?></span></p>
                            <p>Thương hiệu:  <span><?php echo $row['trademark']?></span></p>
                            <p>Xuất sứ:  <span><?php echo $row['origin']?></span></p>
                            <p>Trạng thái: <span>Còn hàng</span></p>
                            <p>Số lượng hàng:  <span><?php echo $row['quantity']?></span></p>
                        </div>
                        <div class="detail__product-button mt-5">
                            <div class="detail__product-btn detail__product-addbtn">
                               <a href="./chucnang/giohang/themhang.php?id_sp=<?php echo $row['idsp']?>&dongia=<?php  echo $row['price']?>"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                            </div>
                            <div class="detail__product-btn detail__product-buybtn">
                                <a href="#"><i class="fas fa-money-bill-wave"></i> Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="details-1">
                    <h2>Mô tả sản phẩm</h2>
                    <ul>
                        <?php echo $row['description']?>
                    </ul>
                </div>
            </div>
        </div>
    </wrap>

