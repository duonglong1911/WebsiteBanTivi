<?php
    $sql = "SELECT * FROM types";
    $result = mysqli_query($connect, $sql);
?>
<?php
    $sql1 = "SELECT * FROM trademark";
    $result1 = mysqli_query($connect, $sql1);
?>


<div class="header">
        <div class="container">
            <div class="logo__header">
                <a href="index.php"><img src="image/logo-thienphu.png" alt="logo"/></a>
                <div style="display: flex; align-items: center">
                    <a href="index.php?page_layout=giohang" class="giohang"><button><i class="fas fa-cart-arrow-down"></i></button></a>
                    <?php
                        session_start();
                        if (!isset($_SESSION['user'])) {
                            header("location:./chucnang/dangnhap_dangky/index.php");
                        } else {
                            echo '<h5 style="margin-right: 15px">'.$_SESSION['user'].'</h5>';
                        }
                    ?>
                    <a href="./chucnang/dangnhap_dangky/logout.php"><button class="btn-logout"><i class="fas fa-sign-out-alt"></i></button></a>
                </div>
            </div>
        </div>
        <div class="menu__header">
            <div class="container">
                <div class="flex">
                    <ul class="menu__header-menu">
                        <li class="menu__item">
                            <a href="index.php" class="menu__item-link">Trang chủ</a>
                        </li>
                        <li class="menu__item">
                            <a href="index.php?page_layout=lienhe" class="menu__item-link">Liên hệ</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__item-link">Danh mục</a>
                            <ul class="menu__item-child">
                                <li class="menu__subnav">Loại
                                    <ul class="menu__subnav-item">
                                        <?php
                                        while($row = mysqli_fetch_array($result)){
                                        ?>
                                        <li class="menu__item">
                                            <a href="index.php?page_layout=danhmuc&id=<?php echo $row['idtype']?>&nametype=<?php echo $row['nametype']?>"><?php echo $row['nametype']?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="menu__subnav">Hãng
                                    <ul class="menu__subnav-item">
                                        <?php
                                        while($row = mysqli_fetch_array($result1)){
                                        ?>
                                        <li class="menu__item">
                                            <a href="index.php?page_layout=danhmuc&id=<?php echo $row['idtrademark']?>&nametrademark=<?php echo $row['nametrademark']?>"><?php echo $row['nametrademark']?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>

                                
                            </ul>
                        </li>
                        <li class="menu__item">
                            <a href="index.php?page_layout=giohang" class="menu__item-link">Giỏ hàng</a>
                        </li>
                    </ul>
                    <div class="menu__header-search">
                        <form action="index.php?page_layout=timkiem" method="POST">
                            <input type="search" name="search" class="search__input" placeholder="Tìm kiếm...">
                            <button type="submit" name="submit">tìm kiếm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
