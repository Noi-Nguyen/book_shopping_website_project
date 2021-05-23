<!-- Start page  -->
<?php include "../includes/database.php"; ?>
<?php include "../includes/head.php"; ?>
    <div class="row product-details">
      <div class="col-3 product-details__menu">
        <div class="product-details__slider">
          <p>Xem Theo</p>
          <hr />
          <a href="#">Khoa học công nghệ</a>
          <a href="#">Kinh doanh</a>
          <a href="#">Kỹ năng</a>
          <a href="#">Nhân vật sự kiện</a>
          <a href="#">Tác phẩm kinh điển</a>
          <a href="#">Thiếu nhi</a>
          <a href="#">Tủ sách gia đình</a>
          <a href="#">Văn hóa xã hội</a>
          <a href="#">Văn học</a>
        </div>
      </div>

      <div class="col-9 product-details__content">
        <!-- breadcrumb -->
        <ul class="breadcrumb">
          <li><a href="#">Trang chủ</a></li>
          <li><a href="./product.php">Cửa hàng</a></li>
          <li><a href="#">Nhân vật-sự kiện</a></li>
          <li>10 nguyên tắc để trở thành nhân tài của Bill...</li>
        </ul>
        <!-- Detail -->
        <div class="product-details-cover">
          <div class="product-details__books">
            <div class="product-details-img">
              <img src="../assets/17.jpg" alt="product" />
            </div>
            <div class="product-details-infor">
              <h2>10 nguyên tắc trở thành nhân tài của Bill Gates</h2>

              <p>Tác giả: Alberto Moravia</p>
              <p>Năm xuất bản: 15</p>
              <div style="display: inline-flex">
                <p>Tình trạng:</p>
                &nbsp
                <p style="color: #0275d8">Còn hàng</p>
              </div>
              <p style="color: red">Giá: 35,000</p>
              <a class="btn-colorRed btn-rounded product-details-btn" href="#">
                <i class="fa fa-shopping-cart" style="color: #fff"></i>&nbspChọn mua</a
              >
            </div>
          </div>

          <!-- Other -->
          <div class="product-details-description">
            <h3>Giới thiệu sách</h3>
            <hr>
            <p>cuốn sách tập hợp những kinh nghiệm tuyển dụng, đào tạo và sử dụng nhân sự, nguyên tắc làm việc, xử lý vấn đề
                phức tạp... của Bill Gates trong quá trình điều hành hoạt động của hãng phần mềm hàng đầu thế giới.
                Đây là nguyên tắc để trở thành nhân viên tài giỏi do chính Bill Gates đúc kết, là kim chỉ nam thành công và nguyên tắc
                làm việc mà các nhân viên của Công ty Microsoft phải tuân theo. Rất nhiều công ty nổi tiếng trên thế giới cũng áp
                dụng những nguyên tắc này để bồi dưỡng, nâng cao tinh thần làm việc cho nhân viên của Công ty mình.
                10 nguyên tắc trở thành nhân tài của Bill Gates đã chỉ ra mục tiêu nỗ lực và phương hướng thành công cho nhân viên
                trên thế giới. Dù ở đâu, làm gì, chỉ cần nắm chắc và áp dụng những nguyên tắc này thì bạn sẽ thành công. Cuốn sách
                cho chúng ta biết mình cần đổi mới, nâng cao kiến thức ra sao, làm việc nhiệt tình, song hành cùng kế hoạch lâu dài
                của Công ty như thế nào... từ đó bạn sẽ khẳng định được bản thân và giành được thành công. Mời các bạn đón đọc!
                Mời các bạn đón đọc 10 nguyên tắc trở thành nhân tài của Bill Gates - Lã Quốc Vinh!</p>
          </div>
        </div>

        <div class="product-details-list">
            <p style="color: #0275d8; padding-left: 40px;margin: 40px 0px;">Sách liên quan</p>
            <div class="product-grid">
                <div class="product-item" onclick="location.href='detailproduct.php'">
                  <div class="product-item__image center">
                    <img src="../assets/1.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Hát cùng những vì sao</h3>
                    <p>Đỗ Nhật Nam</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>45,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/2.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Dưới sao mẹ kể con nghe</h3>
                    <p>Phan Thị Hồ Điệp</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>35,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/3.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Ánh sao trong lòng bố</h3>
                    <p>Đỗ Xuân Thảo</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>35,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/4.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Đời Như giấc mộng</h3>
                    <p>Lê Đình Phương</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>45,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/5.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Tuyển Thơ Lục Bát</h3>
                    <p>Nguyễn Dung</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>35,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/6.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Tiếng Chim Vườn Cũ</h3>
                    <p>Nguyễn Mộng Giác</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>35,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/7.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Mười năm</h3>
                    <p>Tô Hoài</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>55,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/8.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Người tình xa xứ</h3>
                    <p>Hồng Ảnh</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>35,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
            </div>

      </div>
    </div>

<!-- End page -->
<?php include "../includes/end.php"; ?>