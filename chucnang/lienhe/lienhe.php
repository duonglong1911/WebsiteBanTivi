    <?php
        if (isset($_POST['btn_submit'])) {
            $content = $_POST['content'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $sql = "INSERT INTO lienhe(email, phone, content) VALUES ('$email', '$phone', '$content')";
            $result = mysqli_query($connect, $sql);
        }
    ?>


    <div class="title__main">
        <span style="font-weight: 500; color: rgb(160, 160, 175);"><a style="font-weight: 300; color: black;"
                href="index.php">Trang chủ</a> > Liên hệ</span>
        <h1 class="tilte__main-big">Liên hệ</h1>
        <p class="tilte__main-small"></p>
    </div>
    <div class="post__main">
        <form action="" method="POST">
            <div class="input-text">
                <label class="label-contact">Họ và tên</label>
                <br>
                <input type="text" name="fullname" required id="fullname" pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$">
            </div>
            <div class="input-text">
                <label class="label-contact">Email</label>
                <br>
                <input type="email" name="email" required>
            </div>
            <div class="input-text">
                <label class="label-contact">Số điện thoại</label>
                <br>
                <input name="phone" type="text" class="input-box__formLogin" pattern="[0-9]{10,12}" required
                    title="Số điện thoại phải được nhập trong khoảng từ 8 đến 12 ký tự số" />
            </div>
            <div class="input-text">
                <label class="label-contact">Nội dung</label>
                <br>
                <textarea name="content" cols="30" rows="10" required></textarea>
            </div>
            <div class="btn-buy">
                <button type="submit" name="btn_submit">Gửi</button>
            </div>
        </form>
    </div>
