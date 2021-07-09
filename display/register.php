<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        // $re_password=$_POST['re_password'];
        $email      = $_POST['email'];
        $full_name  = $_POST['full_name'];
        $phone      = $_POST['phone'];
        $adress     = $_POST['adress'];
        $ngaysinh   = $_POST['ngaysinh'];

        // $password = md5($password);
        // $re_password = md5($re_password);

    if (strlen($username)<4)  {
    $error="Username quá ngắn!";
    }

    if (strlen($password)<6)  {
    $error="Password quá ngắn!";
    }

    // if ($password != $re_password) {
    //     $error = "Password không khớp!";
    // }

    if (!is_numeric($phone)) {
    $error="Nhập sai số điện thoại!";
    }

    if (empty($error))
    {      
        $query = "SELECT username, email FROM khachhang WHERE email = :email OR username = :username";
        $stmt = $db->prepare($query); // chuẩn bị câu truy vấn để kiểm tra username và email trùng
        $stmt -> bindValue(':username', $username);
        $stmt -> bindValue(':email', $email);
        $stmt->execute();// thực hiện câu truy vấn
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC); //giá trị trả về
        
        if ($user) {
        ?>   
            <script>
            arlet("Tài khoản hoặc email đã tồn tại!");
        </script>;
<?php
            $error= "Tài khoản hoặc email đã tồn tại!" ;
        }else{

            $query = "INSERT INTO khachhang( full_name, username, password,  email, ngaysinh, adress, phone, daycreate) 
                                    VALUES ('$full_name', '$username', '$password', '$email', '$ngaysinh', '$adress', '$phone', now()  )";  
            $count=$db->exec($query);
            header('Location: index.php');
        }
        //$succes = $count->fetch(PDO::FETCH_ASSOC);
        //var_dump($succes);
    }
}
?>

<!-- <form class="form-horizontal" method="post">

    <fieldset>
        <?php if (isset($count)) { ?>
        <div class="alert alert-success container" role="alert">
            <strong> Success! </strong>
        </div>
        <?php } ?>


        <?php if (isset($error)) { ?>
        <div class="alert alert-danger container" role="alert">
            <strong>Error!</strong> <?php  echo $error  ?>
        </div>
        <?php } ?>


      
        <h3 style="text-align: center; color: #35B729">Đăng ký</h3>


        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Họ và tên</label>
            <div class="col-md-4">
                <input id="full_name" name="full_name" type="text" placeholder="Enter your First Name"
                    class="form-control input-md" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Tài khoản</label>
            <div class="col-md-4">
                <input id="username" name="username" type="text" placeholder="Enter your Username"
                    class="form-control input-md" required="">

            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" type="email" placeholder="Enter your email adress"
                    class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Ngày sinh</label>
            <div class="col-md-4">
                <input id="ngaysinh" name="ngaysinh" type="date" placeholder="Enter your email adress"
                    class="form-control input-md" required="">

            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Mật khẩu</label>
            <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="Enter a password"
                    class="form-control input-md" required="aaaaa">

            </div>
        </div>



        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Địa chỉ</label>
            <div class="col-md-4">
                <input id="adress" name="adress" type="text" placeholder="Enter your Adress" class="form-control input-md"
                    required="">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Phone</label>
            <div class="col-md-4">
                <input id="phone" name="phone" type="text" placeholder="Enter your Phone" class="form-control input-md"
                    required="">

            </div>
        </div>

      
        <div class="form-group">
            <label class="col-md-4 control-label" for="signup"></label>
            <div class="col-md-4">
                <button id="signup" name="signup" type="submit" class="btn btn-success" style="text-align: center;">Sign
                    Up</button>
            </div>
        </div>

    </fieldset>
</form> -->