<?php

            $search = $_POST['search'];
            $sql = "SELECT * FROM sanpham WHERE namesp like '%$search%'";
            $result = mysqli_query($connect, $sql);
            $num = mysqli_num_rows($result);
        
    ?>

 
    <div class="title__main">
        <span style="font-weight: 500; color: rgb(160, 160, 175);"><a style="font-weight: 300; color: black;"
                href="index.php">Trang chủ</a> > Tìm kiếm</span>
        <h1 class="tilte__main-big">Tìm kiếm</h1>
        <p class="tilte__main-small"></p>
    </div>
    <div class="post__main">
    <?php
        if ($num > 0 ){
            // Dùng $num để đếm số dòng trả về.
            echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
    ?>
        <?php
            while($row = mysqli_fetch_array($result)){
        ?>
        <div class="post__main-flex">
            <a href="index.php?page_layout=chitietsanpham&id=<?php echo $row['idsp']?>"><img src="image/<?php echo $row['img']?>" height="200px" alt="photo" style="object-fit: cover;"> </a>
            <div class="post__main-txt">
                <h2 class="mb-3"><a class="txt__post-link" href="index.php?page_layout=chitietsanpham&id=<?php echo $row['idsp']?>"><?php echo $row['namesp']?></a></h2>
                <p class="mb-3 txt__post-time">Màu: <?php echo $row['color']?></p>
                <p class="mb-3"> Giá: <span class="price-red"><?php echo $row['price']?><small>đ</small></span></p>
                <p class="mb-3"> Xuất xử: <?php echo $row['origin']?></p>
                <p class="mb-3"> Hãng: <?php echo $row['trademark']?></p>
            </div>
        </div>
        <?php 
            }}
            else{
                echo 'không tìm thấy kết quả';
            }
        ?>
    </div>
