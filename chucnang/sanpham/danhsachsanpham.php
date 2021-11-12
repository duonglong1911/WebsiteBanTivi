<?php
    $item = 8;
    $sql = "SELECT * FROM sanpham LIMIT 8";
    $result = mysqli_query($connect, $sql);
    $sql1 = "SELECT * FROM sanpham ";
    $result1 = mysqli_query($connect, $sql1);
    $row1 = mysqli_num_rows($result1);
    $totalPage = ceil($row1/$item);
    
    $sql2 = "SELECT * FROM trademark";
    $result2 = mysqli_query($connect, $sql2);

?>


    <main class="main__listproduct">
        <div class="column-left">
                <div class="title__main">
                <span><a class="action__link" href="index.php">Trang chủ</a></span>
                <h5 class="title__product mt-2 mb-4">Trang chủ</h5>
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
        </div>
        <div class="column-right">
            <div class="category">
                <div class="category__content">
                    <div class="category__types">
                        <div class="category-title">Tivi</div>
                        <ul class="category__list">
                            <?php
                            while($row = mysqli_fetch_array($result2)){
                            ?>
                            <li class="category__item">
                                <a href="index.php?page_layout=danhmuc&id=<?php echo $row['idtrademark']?>&nametrademark=<?php echo $row['nametrademark']?>" class="category__item-link"><?php echo $row['nametrademark']?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="category__types">
                        <h5 class="category-title">Giá</h5>
                        <ul class="category__list-size">
                            <li class="category__item-size">
                                <input type="checkbox">Từ 5-10tr
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">từ 10-15tr
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">từ 15-20tr
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">từ 20-25tr
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">trên 25tr
                            </li>
                        </ul>
                    </div>
                    <div class="category__types">
                        <h5 class="category-title">Cỡ màn hình</h5>
                        <ul class="category__list-size">
                            <li class="category__item-size">
                                <input type="checkbox">40 Inch
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">43 Inch
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">50 Inch
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">55 Inch
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">60 Inch
                            </li>
                        </ul>
                    </div>
                    <div class="category__types">
                        <h5 class="category-title">Độ phân giải</h5>
                        <ul class="category__list-size">
                            <li class="category__item-size">
                                <input type="checkbox">HD
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">Full HD
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">4K
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">8K
                            </li>
                        </ul>
                    </div>
                    <div class="category__types">
                        <h5 class="category-title">Màu</h5>
                        <ul class="category__list-size">
                            <li class="category__item-size">
                                <input type="checkbox">Đen
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">Trắng
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">Xanh
                            </li>
                            <li class="category__item-size">
                                <input type="checkbox">Nâu
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
        </div>
    </main>
    <div class="pagination">
        <?php
            for($i = 1; $i <= $totalPage; $i++){
        ?>
            <a href="index.php?page_layout=phantrang&page=<?php echo $i?>"><?php echo $i?></a>
        <?php }?>
    </div>
