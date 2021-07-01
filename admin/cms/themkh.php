 <?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $hoten=$_POST['hoten'];
        $taikhoan=$_POST['taikhoan'];
        $email=$_POST['email'];
        $matkhau=$_POST['matkhau'];
        $diachi=$_POST['diachi'];
        $phone=$_POST['phone'];				
                    
            $query = "INSERT INTO khachhang(full_name, username, email ,password, adress, phone, daycreate) 
                                    VALUES('$hoten', '$taikhoan', '$email', '$matkhau', '$diachi', '$phone',now())";
            $count=$db->exec($query);
            if($count>0)
            {
                ?>
                    <script>
                    if (confirm("Bạn đã thêm khách hàng thành công") == true) {
                        window.location = "index.php?page=thanhvien";
                    }
                    </script>;
                <?php 
            }
        }  
        ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center">Thêm khách hàng</h4>
            </div>
            <div class="card-body form-control text-center " style="padding-left: 50px;">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">

                    <div class="mb-3 row pt-2">
                        <label class="col-sm-2 col-form-label">Họ và tên </label>
                        <div class="col-sm-3">
                            <input type="text" name="hoten" class="form-control form-control-sm" required="" value="" />

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tài khoản </label>
                        <div class="col-sm-3">
                            <input type="text" name="taikhoan" class="form-control form-control-sm" required="" value="" />

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Email </label>
                        <div class="col-sm-3">
                            <input type="text" name="email" class="form-control form-control-sm" required="" value="" />

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Mật khẩu </label>
                        <div class="col-sm-3">
                            <input type="password" name="matkhau" class="form-control form-control-sm" required="" value="" />
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Địa chỉ </label>
                        <div class="col-sm-3">
                            <input type="text" name="diachi" class="form-control form-control-sm" required="" value="" />

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Phone </label>
                        <div class="col-sm-3">
                            <input type="text" name="phone" class="form-control form-control-sm" required="" value="" />

                        </div>
                    </div>





                    <div class="mb-3 row">
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-dark text-light">Thêm mới</button>
                        </div>
                    </div>
                </form>
         </div>
     </div>
 </div>