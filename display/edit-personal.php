<?php
$makh = $_REQUEST['makh'];
// Lấy dữ liệu cũ
$q = "select * from khachhang where makh=$makh";
$rows = $db->query($q);
$r = $rows->fetch();
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    //Gán biến dữ liệu
    $hoten = $_POST['hoten'];
    $taikhoan = $_POST['taikhoan'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $diachi = $_POST['diachi'];
    $phone = $_POST['phone'];
    $ngaysinh = $_POST['ngaysinh'];

    //Sau khi lấy thông tin từ form, update vào bảng khachhang
    $query = "update khachhang
                    set full_name='$hoten', ngaysinh='$ngaysinh', username='$taikhoan', email='$email', password='$matkhau', adress='$diachi', phone='$phone'
                    where makh=$makh";

    //Thực thi câu truy vấn
    $count = $db->exec($query);

    if ($count > 0) {
?>
        <script>
            if (confirm("Sửa khách hàng thành công") == true) {

                window.location = "index.php?page=personal&makh=<?php echo $r['makh'] ?>";
            }
        </script>;
<?php
    }
}
?>
<div class="row">
    <div class="edit-person">
        <div class="edit-body row">
            <div class="edit-title">
                Sửa thông tin cá nhân
            </div>
            <div class="avt col-sm-4">
                <img src="https://huntersstore.vn/wp-content/uploads/2018/06/m%C3%B4-h%C3%ACnh-iron-man-mark-43-shf-avengers-aou-bootleg-01.jpg" alt="">
            </div>
            <div class="edit-info col-sm-8">
                <form action="" method="post" enctype="multipart/form-data" class="">
                    <div class="form-group">
                        <label class="control-label">Họ và tên </label>

                        <input type="text" name="hoten" class="form-control" required="" value="<?php if (isset($r)) echo $r['full_name']; ?>" />

                    </div>
                    <div class="form-group">
                        <label class="control-label">Tên tài khoản </label>
                        <input type="text" class="form-control" name="taikhoan" value="<?php if (isset($r)) echo $r['username'] ?>" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email </label>
                        <input type="text" name="email" class="form-control" required="" value="<?php if (isset($r)) echo $r['email'] ?>" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mật khẩu </label>
                        <input type="password" name="matkhau" class="form-control" required="" value="<?php if (isset($r)) echo $r['password'] ?>" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Địa chỉ </label>
                        <input type="text" name="diachi" class="form-control" required="" value="<?php if (isset($r)) echo $r['adress'] ?>" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phone </label>
                        <input type="text" name="phone" class="form-control" required="" value="<?php if (isset($r)) echo $r['phone'] ?>" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ngày sinh </label>
                        <input type="date" name="ngaysinh" class="form-control" required="" value="<?php if (isset($r)) echo $r['ngaysinh'] ?>" />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right" style="margin-left:15px">Cập nhật</button>
                        <a class="btn btn-danger pull-right" href="index.php?page=personal&makh=<?php echo $r['makh'] ?>" role="button">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>