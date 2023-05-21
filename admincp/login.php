<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = $_POST['password'];
        $sql_nguoidung = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' AND admin_status = 1";
		$row_nguoidung = mysqli_query($mysqli,$sql_nguoidung); 
        $count = mysqli_num_rows($row_nguoidung);
        
           if($count>0){
                $_SESSION['dangnhap']=$taikhoan;
                header("Location:index.php");
            }else{
                $message = "Tài khoản mật khẩu không đúng";
                echo "<script type='text/javascript'>alert('$message');</script>";
                // header("Location:login.php");
            }  
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login</title>
</head>
<body>

<form class="login" action="login.php" method="POST">
  <h2 style="text-align: center">ADMIN LOGIN</h2>
  <input type="text" placeholder="Username" name="username">
  <input type="password" placeholder="Password" name="password">
  <button type="submit" name="dangnhap">Login</button>
</form>

</body>
</html>