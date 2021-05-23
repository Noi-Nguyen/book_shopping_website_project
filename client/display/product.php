<!-- Start page  -->
<?php include "../includes/database.php"; ?>
<?php include "../includes/head.php"; ?>
    <div class="main-product">
      <ul class="breadcrumb">
        <li><a href="./bookstore.html">Trang chủ</a></li>
        <li><a href="detailproduct.php">Cửa hàng</a></li>
        <li>Chi tiết sản phẩm</li>
        <!-- <li>None</li> -->
      </ul>
      <div class="section">
        <div class="container">          
          <div class="container-cover" style="overflow:auto">
            <div class="menu-product">
              <p>Xem Theo</p>
              <hr>
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
          
            <div class="main">
              <div class="main-header" >
                <div class="custom-select" style="width:220px;">
                  <select>
                    <option value="1">Xếp theo sản phẩm mới</option>
                    <option value="2">Xếp theo tên:A->Z</option>
                    <option value="3">Xếp theo tên:Z->A</option>
                    <option value="4">Xếp theo giá: Cao đến thấp</option>
                    <option value="5">Xếp theo giá: Thấp đến cao</option>
                    <option value="6">Xếp theo mua nhiều nhất</option>
                  </select>
                </div>
                <a class="btn btn-colorBlue btn-sizeSmall btn-rounded" href="#">Sắp xếp</a>
              </div>
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
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/9.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Truyện ngắn hay</h3>
                    <p>Nhiều tác giả</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>35,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/10.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Tuyển tập truyện ngắn đặc sắc</h3>
                    <p>Nhiều tác giả</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>35,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/11.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Ngồi lê chém gió</h3>
                    <p>Lê Thị Liên Hoan</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>35,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__image center">
                    <img src="../assets/12.jpg" alt="product1">
                  </div>
                  <div class="product-item__text">
                    <h3>Đời công chức</h3>
                    <p>Vương Hiểu Phương</p>                   
                  </div>
                  <div class="product-item__price" style="display:flex; justify-content: space-between;">
                    <p>35,000</p>
                    <i class="fa fa-shopping-cart" style="color:#fff;background-color: #aaaaaa; width: 30px; height: 30px; align-items: center;"></i>
                  </div>
                </div>
              </div>
            </div>         
          </div>
        </div>
    </div>
    </div>
    <div class="pagination center">
      <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">&raquo;</a>
    </div>
<!-- End page -->
<?php include "../includes/end.php"; ?>
