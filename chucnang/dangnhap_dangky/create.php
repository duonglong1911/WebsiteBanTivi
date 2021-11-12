<?php
    function rand_string( $length ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
        $str = $chars[ rand( 0, $size - 1 ) ];
         }
        return $str;
    }
    
	
    $my_string = rand_string( 5 );
	if (isset($_POST["submit-create"])) {
        $email = $_POST["email"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $nickname = $_POST["nickname"];
        $repassword = $_POST["repassword"];
        $address = $_POST["address"];
        $sql = "SELECT * FROM user WHERE nickname = '$nickname' OR email = '$email'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0)
        {
            echo '<script>alert("Bị trùng biệt danh hoặc email!"); window.location="./index.php?page_layout=create";</script>';

        // Dừng chương trình
            die ();
        }
        else{     
            if($password === $repassword){
                $sql1 = "INSERT INTO user VALUES ('$my_string' , '$password', '$name', '$phone', '$email', '$address', '$nickname')";
                $result1 = mysqli_query($conn, $sql1);
                if($result){
                    $message = "Bạn đã đăng kí thành công";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header('Location: ./index.php');
                }
            }
            else{
                echo '<script>alert("Mật khẩu không khớp"); window.location="./index.php?page_layout=create";</script>';
            }
        }	
	}
?>


    <form action="" method="POST">
        <div class="box-form__login">
            <label class="txt-box__formLogin">Tên tài khoản</label>
            <input name="name" type="text" class="input-box__formLogin" 
            pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{3,15}+$"
             required
                title="Biệt danh phải được nhập trong khoảng từ 3 đến 15 ký tự"/>
        </div>
        <div class="box-form__login">
            <label class="txt-box__formLogin">Số điện thoại</label>
            <input name="phone" type="text" class="input-box__formLogin" pattern="[0-9]{10,12}" required
                title="Số điện thoại phải được nhập trong khoảng từ 8 đến 12 ký tự số" />
        </div>
        <div class="box-form__login">
            <label class="txt-box__formLogin">Email</label>
            <input name="email" type="email" class="input-box__formLogin" required />
        </div>   
        <div class="box-form__login">
            <label class="txt-box__formLogin">Tên đăng nhập</label>
            <input name="nickname" type="text" class="input-box__formLogin" pattern="{3,15}" required
                title="Biệt danh phải được nhập trong khoảng từ 3 đến 15 ký tự"/>
        </div>
        <div class="box-form__login">
            <label class="txt-box__formLogin">Mật khẩu</label>
            <input name="password" type="password" class="input-box__formLogin" required
                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{6,}.*$"
                title="Mật khẩu phải có ít nhất một chữ hoa, chữ thường, số, ký tự đặc biệt và có độ dài từ 6 ký tự trở lên" />
        </div>
        <div class="box-form__login">
            <label class="txt-box__formLogin">Nhập lại mật khẩu</label>
            <input name="repassword" type="password" class="input-box__formLogin" required
                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{6,}.*$"
                title="Mật khẩu phải có ít nhất một chữ hoa, chữ thường, số, ký tự đặc biệt và có độ dài từ 6 ký tự trở lên" />
        </div>
        <div class="box-form__login">
            <label class="txt-box__formLogin">Địa chỉ</label>
            <input name="address" type="tex" class="input-box__formLogin" required />
        </div>
        <div class="link-register__forgot">
            <a href="./index.php" class="txt-box__formLogin">Đăng nhập</a>
        </div>
        <input type="submit" name="submit-create" class="input-box__formLogin" />
    </form>
