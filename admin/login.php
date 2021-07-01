<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <!-- <link type="text/css" rel="stylesheet" href="./cssjsadmin/icons/font-awesome.css"> -->
    <link type="text/css" rel="stylesheet" href="./cssjsadmin/css/login.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="./cssjsadmin/bootstrap/css/bootstrap.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>

    <?php
      session_start();
      include "./includes/connect.php";
      // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // lấy thông tin người dùng
          $username = $_POST["user"];
          $password = $_POST["pass"];
          //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
          //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
          $username = strip_tags($username);
          $username = addslashes($username);
          $password = strip_tags($password);
          $password = addslashes($password);

          if ($username == "" || $password == "") {
              $error = 'Tên đăng nhập hoặc mật khẩu không được để trống!';
          } else {
              $sql = "select * from admin where username ='$username' and password ='$password' ";
              $rows = $db->query($sql);
              $rs   = $rows->fetch();
              if (!empty($rs)) {
                  //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                  $_SESSION['login_us'] = 'ok';
                  $_SESSION['username'] = $username;
                  // Thực thi hành động sau khi lưu thông tin vào session
                  
                  header('Location: index.php');
              } else {
                 $error="Username hoặc Password không đúng";
                }
              
            }
      }
  ?>



    <header class="header">
        <div class="container">
            <h1>Hệ thống quản lý admin</h1>
        </div>
    </header>


    <!-- <div class="content">
  <div class="container">
    
  </div>

</div> -->

<section class="ad-log">
        <div class="ad-log__header">
            <?php if (isset($error)) { ?>
            <div class="alert alert-danger container" role="alert">
                <strong>Error!</strong> <?php  echo $error  ?>
            </div>
            <?php } ?>

            <div class="ad-log__container" id="content">
            <form class="ad-log__form" method="post">

                <h3 class="ad-log__title">Admin</h3>

                <input type="text" id="inputEmail" placeholder="Username" name="user">
                <i class="fa fa-user"></i>
                <input type="password" id="inputPassword" placeholder="Password" name="pass">
                <i class="fa fa-key" aria-hidden="true"></i>
                <button>
                    <div class="state" type="submit">Log in</div>
                </button>
            </form>
        </div>
        </div>
    </section>



</body>

</html>