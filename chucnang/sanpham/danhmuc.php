<?php
    $id = $_GET['id'];
    $nametype = $_GET['nametype'];
    $sql = "SELECT * FROM sanpham WHERE idtype = '".$id."'";
    $result = mysqli_query($connect, $sql);
?>

<div class="title__main">
        <span><a class="action__link" href="index.php">Trang chủ</a> > Danh mục</span>
        <h1 class="title__product mt-2 mb-4">Danh mục: <?php echo $nametype?></h1>
        <p class="tilte__main-small"></p>
    </div>
        <ul class="list-products">
            <?php
            while($row = mysqli_fetch_array($result)){
        ?>
        <li class="product-item col-3 mb-2">
            <div class="product__content">
                <a href="index.php?page_layout=chitietsanpham&id=<?php echo $row['idsp']?>"><img src="image/<?php echo $row['img']?>" alt="photo" class="product-img"> </a>
                <div class="product-info">
                    <p class="mb-1 box__product-name"><a class="txt__post-link" href="index.php?page_layout=chitietsanpham&id=<?php echo $row['idsp']?>"><?php echo $row['namesp']?></a></p>
                    <p class="mb-1 product-color">Màu: <?php echo $row['color']?></p>
                    <p class="mb-1"><span class="product-price"><?php echo $row['price']?><small>đ</small></span></p>
                    <p class="mb-1 product-origin"> Xuất xử: <?php echo $row['origin']?></p>
                    <p class="mb-1 product-trademark"> Hãng: <?php echo $row['trademark']?></p>
                </div>
            </div>
        </li> 
        <?php }?>
        </ul>
