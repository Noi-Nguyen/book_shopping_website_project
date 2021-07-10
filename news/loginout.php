<section class="log_body">
    <div class="wrapper">
        <!-- Tab links -->
        <div class="menu_tab">
            <ul class="tabs">
                <li class="tab-link current" data-tab="login">Đăng nhập</li>
                <li class="tab-link" data-tab="signin">Đăng kí</li>
            </ul>
        </div>

        <div class="body_tab row">
            <div class="col-sm-8 log_account">
                <!-- Tab content -->
                <!-- form đăng nhập -->
                <div id="login" class="tab-content current">
                    <form action="index.php?page=login" method="post" enctype="multidata/form-data">
                        <div class="form-group">
                            <label for="email">Tên tài khoản:</label>
                            <input type="text" name="username" class="form-control" id="email_login" placeholder="Email hoặc số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Mật khẩu:</label>
                            <input type="password" name="password" class="form-control" id="pwd_login" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                        <span><button type="submit" class="btn btn-primary">Đăng nhập</button></span>
                        <span>Quên mật khẩu?</span>
                        <p style="margin-top: 10px"> Bạn chưa có tài khoản? Đăng kí</p>
                    </form>
                </div>
                <!-- form đăng kí -->
                <div id="signin" class="tab-content">
                    <form action="index.php?page=register" method="post" enctype="multidata/form-data">
                        <div class="form-group">
                            <label for="email">Họ và tên:</label>
                            <input type="text" name="full_name" class="form-control" id="user_name" placeholder="Nhập họ và tên">
                        </div>
                        <div class="form-group">
                            <label for="email">Sinh nhật:</label>
                            <input type="date" name="ngaysinh" class="form-control" id="birth" placeholder="Nhập năm/tháng/ngày sinh của bạn">
                        </div>
                        <div class="form-group">
                            <label for="email">Số điện thoại:</label>
                            <input type="tel" name="phone" class="form-control" id="tel" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="text">Địa chỉ</label>
                            <input type="tel" name="adress" class="form-control" id="tel" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email_sign" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label for="email">UserName:</label>
                            <input type="text" name="username" class="form-control" id="user_name" placeholder="Nhập họ và tên">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Mật khẩu:</label>
                            <input type="password" name="password" class="form-control" id="pwd_sign" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng kí</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-4 log_social">
                <ul>
                    <li class="login_social_btn" style="background-color: #1b6afc"><a href="#"><i class="fab fa-facebook-f"></i> Đăng nhập bằng
                            Facebook</a></li>
                    <li class="login_social_btn" style="background-color: #ff3434"><a href="#"><i class="fab fa-google-plus-g"></i> Đăng nhập bằng
                            Google</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>