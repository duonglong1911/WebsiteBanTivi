<?php
	//Gọi file connection.php ở bài trước
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$nickname = $_POST["nickname"];
		$password = $_POST["password"];
			$sql = "select * from user where nickname = '$nickname' and pass = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['user'] = mysqli_fetch_array($query)['name'];
                // $_SESSION['userid'] = mysqli_fetch_array($query)['id'];
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: ../../index.php');
			}
		}
?>


    <form action="" method="POST">
        <div class="box-form__login">
            <label class="txt-box__formLogin">Tên đăng nhập</label>
            <input name="nickname" type="text" class="input-box__formLogin" required />
        </div>
        <div class="box-form__login">
            <label class="txt-box__formLogin">Mật khẩu</label>
            <input name="password" type="password" class="input-box__formLogin" required
                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{6,}.*$"
                title="Mật khẩu phải có ít nhất một chữ hoa, chữ thường, số, ký tự đặc biệt và có độ dài từ 6 ký tự trở lên" />
        </div>
        <div class="link-register__forgot">
            <a href="./index.php?page_layout=create" class="txt-box__formLogin">Đăng ký</a>
        </div>
        <input type="submit" name="btn_submit" class="input-box__formLogin" />
    </form>
