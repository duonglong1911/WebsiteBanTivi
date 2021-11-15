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
                <div class="header__logo">
                    <a href="index.php"><img src="image/logo-thienphu.png" width="80%" alt="logo"/></a>
                    <div class="header-search">
                        <form action="index.php?page_layout=timkiem" method="POST">
                            <input type="search" name="search" class="search__input" placeholder="Bạn cần tìm gì... ">
                            <button class="search__button" type="submit" name="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                

                <!-- <div class="header__info">
                    <div class="header__phone">
                        <p>Mua online:</p>
                        <i class="fas fa-phone"></i>
                        <p class="header__des">0366.369.782</p>
                    </div>
                    <div class="header__address">
                        <p>Địa chỉ shop:</p>
                        <i class="fas fa-map-marker-alt"></i>
                        <p class="header__des">QL5 Kim Thành- HD</p>
                    </div>
                </div> -->
                <div class="header__right">
                    <a href="index.php?page_layout=giohang" class="giohang"><button><i class="fas fa-cart-arrow-down"></i></button></a>
                    <?php
                        session_start();
                        if (!isset($_SESSION['user'])) {
                            header("location:./chucnang/dangnhap_dangky/index.php");
                        } else {
                            echo '<h5 class="header__username">'.$_SESSION['user'].'</h5>';
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
                            <a href="#" class="menu__item-link">Danh mục <i class="fas fa-chevron-down"></i></a>
                            <ul class="menu__item-child">
                                <li class="menu__subnav">
                                    <div class="menu__subnav-content">
                                        <p>Loại</p><i class="fas fa-chevron-right"></i>
                                    </div>
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
                                <li class="menu__subnav">
                                    <div class="menu__subnav-content">
                                        <p>Hãng</p><i class="fas fa-chevron-right"></i>
                                    </div>
                                    <ul class="menu__subnav-item">
                                        <?php
                                        while($row = mysqli_fetch_array($result1)){
                                        ?>
                                        <li class="menu__item">
                                            <a href="index.php?page_layout=trademark&id=<?php echo $row['idtrademark']?>&nametrademark=<?php echo $row['nametrademark']?>"><?php echo $row['nametrademark']?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__item">
                            <a href="index.php?page_layout=giohang" class="menu__item-link">Giỏ hàng</a>
                        </li>
                        <li class="menu__item">
                            <a href="index.php?page_layout=lienhe" class="menu__item-link">Liên hệ</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
