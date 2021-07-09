<?php 
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      $username = $_POST["username"];
      $password = $_POST["password"];
      //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
      //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
      $username = strip_tags($username);
      $username = addslashes($username);
      $password = strip_tags($password);
      $password = addslashes($password);

      if ($username == "" || $password == "") {
          echo" 'Tên đăng nhập hoặc mật khẩu không được để trống!'";
      } else {
          $sql = "SELECT * FROM khachhang WHERE username ='$username' AND password ='$password' ";
          $rows = $db->query($sql);
          $rs   = $rows->fetch();
          
          
          if (!empty($rs)) {
              //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
              $_SESSION['login_member'] = 'ok';
              $_SESSION['username']     = $username;
              // Thực thi hành động sau khi lưu thông tin vào session
              
              header('Location: index.php');

          } else {
            $error="Tên đăng nhập hoặc mật khẩu sai!";
?>
            <script language="javascript">
        	confirm("Do you like freetuts.net");
        </script>
<?php
             header('Location: index.php?page=loginout');
            }
          
        }
        
    }

?>


<!-- <div class="wrapper-login">

    <?php if (isset($error)) { ?>
    <div class="alert alert-danger container col-sm-3" role="alert">
        <strong>Error!</strong> <?php  echo $error  ?>
    </div>
    <?php } ?>
    <form class="login" method="post">

        <h3 class="title-login">Đăng nhập</h3>
        <input type="text" name="username" placeholder="Username" autofocus />
        <i class="fa fa-user"></i>
        <input type="password" name="password" placeholder="Password" />
        <i class="fa fa-key"></i>
        <a href="index.php?page=forgotpass">Forgot your password?</a>
        <br>
        <br>
        <a href="index.php?page=register">Not Register?</a>

        <button>
            <span class="state" type="submit">Log in</span>
        </button>

    </form>
</div> -->


