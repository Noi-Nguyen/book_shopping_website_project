<div class="dangki_wrapper">
    <div class="">
        <!-- <div class="footer-top">
     <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email     = $_POST['email'];
            $query  = "insert into phanhoi(email, day) values ($email', now())";
            $rowss = $db->exec($query);
        }
        ?>
            <?php if (isset($rowss)) { ?>
            <div class="alert alert-success" role="alert">
                <strong> Thank you for responding to us! </strong>
            </div>
            <?php } ?>

            <div class="subcribe">
                <form class="form-subcribe" method="post">

                    <h1>Contact Us</h1>
                    <div class="half-contact contact">

                        <input type="email" id="input-email" name="email" placeholder="Email address">
                    </div>
                </form>
            </div>
        </div> -->
        <div class="footer__header">
            <div class="col-sm-2 footer__icon_email">
                <img src="./images/social-media.png" alt="send email">
            </div>
            <div class="col-sm-6 dangki_text">
                <div class="dangki_text_box">
                    <h3>Đăng ký nhận tin từ UIT Store</h3>
                    <h4>Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình hấp dẫn nhé</h4>
                </div>
            </div>
            <div class="col-sm-4 footer__input_email">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email     = $_POST['email'];

                    $query  = "insert into phanhoi( email, day) values ('$email', now())";
                    $rowss = $db->exec($query);
                }
                ?>
                <form action="#" method="post">
                    <input type="email" id="input-email" name="email" placeholder="Địa chỉ email của bạn">
                    <button type="submit" class="btn_dangki">Đăng kí</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <footer class="footer-distributed">
    <div class="container">
        <div class="footer-left">
            <h2>Blue store</h2>
            <ul class="footer-links">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?page=product">Cửa hàng</a></li>
                <li><a href="index.php?page=news">Tin tức</a></li>
                <li><a href="index.php?page=contact">Liên hệ</a></li>
            </ul>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p>Khu phố 6, P. Linh Trung, Quận Thủ Đức <br> Hồ Chí Minh, Việt Nam</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+84 123456789</p>
            </div>

            <div>
            <i class="fas fa-paper-plane"></i>
                <p><a href="mailto:17521273@gm.uit.edu.vn">17521273@gm.uit.edu.vn</a></p>
            </div>
        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>
                    Trường Đại học Công nghệ Thông tin - Đại học Quốc gia TP.HCM</span>
                Trường Đại học Công nghệ Thông tin có nhiệm vụ đào tạo nguồn nhân lực công nghệ thông tin chất lượng cao
                góp phần tích cực vào sự phát triển của nền công nghiệp công nghệ thông tin Việt Nam, đồng thời tiến
                hành nghiên cứu khoa học và chuyển giao công nghệ thông tin tiên tiến.

            </p>

            <div class="footer-icons">

                <a href="https://www.facebook.com/" ><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com" TARGET=_blank><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/" TARGET=_blank><i class="fab fa-linkedin"></i></a>

            </div>

        </div>
    </div>
    <div class="footer-bot">
        <p>Copyright © 2018 The Blue. All rights reserved.</p>
    </div>
</footer> -->

<footer class="footer">
    <div class="footer_main">
        <div class="row">
            <div class="col-md-4 footer_about_us">
                <h4>Về chúng tôi</h4>
                <ul>
                    <li><a href="#">Giới thiệu về UIT Store</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="#">Bán hàng trên UIT Store</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Chính sách bán hàng</a></li>
                    <li><a href="#">Hướng dẫn sử dụng</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer_mobile_app">
                <h4>tải ứng dụng trên điện thoại</h4>
                <ul>
                    <li><a href="#"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/appstore.png" alt="appstore"></a></li>
                    <li><a href="#"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/playstore.png" alt="playstore"></a></li>
                </ul>
            </div>
            <div class="col-md-3 footer_network">
                <h4>Kết nối với chúng tôi</h4>
                <ul>
                    <li><a href="https://www.facebook.com/T.8.1.13.8.99/"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                    <li><a href="https://www.instagram.com/t.8.1.13.8.99/"><i class="fab fa-instagram"></i>Instagram</a>
                    </li>
                    <li><a href="17521058@gmail.com"><i class="far fa-envelope"></i>Gmail</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="footer_bottom">
        <p>Copyright © 2019 The BLUE. All rights reserved.
        </p>
    </div> -->

</footer>


</body>

</html>