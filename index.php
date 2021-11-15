<?php
    // ob_start();
    // session_start();
    include_once('./connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,800;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/library/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="./assets/library/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="./assets/library/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="./assets/library/jquery/jquery-3.6.0.min.js"></script>
    <script src="./index.js"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Website bán Tivi</title>
</head>

<body>
    <?php 
        include_once('./views/header.php');
    ?>
    <div class="container">
        <?php
            include_once('./views/banner.php');
        ?>
        <div class="main">
            <div class="products">
                <?php
                    if(isset($_GET['page_layout'])){
                         switch($_GET['page_layout']){
                            case 'danhsachsanpham':
                                {
                                    include_once('./chucnang/sanpham/danhsachsanpham.php');
                                    break;  
                                }
                            case 'trademark':
                                {
                                    include_once('./chucnang/sanpham/trademark.php');
                                    break;  
                                }
                            case 'chitietsanpham':
                                {
                                    include_once('./chucnang/sanpham/chitietsanpham.php');
                                    break;  
                                }
                            case 'lienhe':
                                {
                                    include_once('./chucnang/lienhe/lienhe.php');
                                    break;  
                                }
                            case 'danhmuc':
                                {
                                    include_once('./chucnang/sanpham/danhmuc.php');
                                    break;  
                                }  
                            case 'timkiem':
                                {
                                    include_once('./chucnang/timkiem/timkiem.php');
                                    break;  
                                } 
                            case 'giohang':
                                {
                                    include_once('./chucnang/giohang/giohang.php');
                                    break;  
                                }  
                                case 'phantrang':
                                    {
                                        include_once('./chucnang/phantrang/phantrang.php');
                                        break;  
                                    }  
                              
                            default: include_once('./chucnang/sanpham/danhsachsanpham.php');
                        }
                    }
                    else{
                        include_once('./chucnang/sanpham/danhsachsanpham.php');
                    }
                   
                    
                ?>
            </div>
        </div>
    </div>
    <?php
        include_once('./views/footer.php')
    ?>
</body>

</html>