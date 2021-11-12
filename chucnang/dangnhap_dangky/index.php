<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./LoginCreate.css">
    <link rel="stylesheet" href="../../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./index.js"></script>
</head>
<body>
<?php
$conn = mysqli_connect ('localhost', 'root', '', 'qlbantivi') or die ('Không thể kết nối tới database');
?>
    <div class="header">
        <div class="container">
            <div class="logo__header">
                <img src="../../image/logo-moi.png" alt="logo">
            </div>
        </div>
    </div>
    <div class="container-fluid-1 pt-3 pb-3">
        <div id="login">
            <div class="login">
                <div class="title-login">
                    <h4 class="txt-title__login">Chào mừng đến với trang web bán Tivi</h4>
                    <p class="text-login">Đến với chúng tôi bạn sẽ mua được Tivi mà bạn mong muốn</p>
                </div>
                <div class="login-internet">
                    <p class="link-btn-login-internet google">Google</p>
                    <p class="link-btn-login-internet facebook">Facebook</a>
                </div>
                <div class="border-or-login">
                    <span class="txt-login border-or">or</span>
                </div>
                <div>
                    <div class="form-login">
                    <?php
                        if(isset($_GET['page_layout'])){
                            switch($_GET['page_layout']){
                                case 'login':
                                    {
                                        include_once('./login.php');
                                        break;  
                                    }
                                case 'create':
                                    {
                                        include_once('./create.php');
                                        break;  
                                    }
                                default: include_once('./login.php');
                            }
                        }
                        else{
                            include_once('./login.php');
                        }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <div class="footer">
                <h3>Bài tập lớn: website bán Tivi</h3>
                <h3>Trường: Kinh tế kỹ thuật công nghiệp - Hà Nội</h3>
                <h3>Họ tên: Dương Văn Long</h3>
                <h3>Ngày Sinh: 19/11/2000</h3>
                <h3>Mã sinh viên: 18103000027</h3>
                <h3>Lớp: ĐHTin12A1HN</h3> 
            </div>
            <div class="copy" style="margin-top: 25px;">
                <p style="color: rgb(160, 160, 175); font-size: 12px;">© Copyright 2021, Loki</p>
            </div>
        </div>
    </div>
</body>
</html>