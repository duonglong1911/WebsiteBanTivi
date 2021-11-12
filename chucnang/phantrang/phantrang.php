<?php
    $item = 8;
    $page =  $_GET['page'];
    $offset = ($page - 1) * 8;
    $sql = "SELECT * FROM sanpham LIMIT ".$item." OFFSET ".$offset."";
    $result = mysqli_query($connect, $sql);
    $sql1 = "SELECT * FROM sanpham ";
    $result1 = mysqli_query($connect, $sql1);
    $row1 = mysqli_num_rows($result1);
    $totalPage = ceil($row1/$item);
?>


    <div class="title__main">
        <span><a  class="action__link" href="index.php">Trang chủ</a> > Phân trang</span>
        <h1 class="title__product mt-2 mb-4">Trang <?php echo $page?></h1>
        <p class="tilte__main-small"></p>
    </div>
    <ul class="list-products">
        <?php
            while($row = mysqli_fetch_array($result)){
        ?>
        <li class="product-item col-3 mb-2">
            <div class="product__content">
                <a href="index.php?page_layout=chitietsanpham&id=<?php echo $row['idsp']?>"><img src="image/<?php echo $row['img']?>" alt="photo" class="product-img"></a>
            <div class="product-info">
                <p class="mb-1 box__product-name"><a class="txt__post-link product-name" href="index.php?page_layout=chitietsanpham&id=<?php echo $row['idsp']?>"><?php echo $row['namesp']?></a></p>
                <p class="mb-1 product-color">Màu: <?php echo $row['color']?></p>
                <p class="mb-1"><span class="product-price"><?php echo $row['price']?><small>đ</small></span></p>
                <p class="mb-1 product-origin"> Xuất xử: <?php echo $row['origin']?></p>
                <p class="mb-1 product-trademark"> Hãng: <?php echo $row['trademark']?></p>
            </div>
            </div>
        </li>
        <?php }?>
    </ul>
    <br>
    <div class="pagination">
        <?php
            for($i = 1; $i <= $totalPage; $i++){
        ?>
            <a href="index.php?page_layout=phantrang&page=<?php echo $i?>"><?php echo $i?></a>
        <?php }?>
    </div>
