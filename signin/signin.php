<?php
	session_start();
	include('../admincp/config/config.php');  
	if(isset($_POST['dangnhap'])){  
        $taikhoan = $_POST['Email'];
		$matkhau = $_POST['Password'];
		$sql = "SELECT * FROM tbl_admin WHERE tbl_admin.username='".$taikhoan."' AND tbl_admin.password='".$matkhau."'  LIMIT 1";
		$row = mysqli_query($mysqli,$sql); 
		$count = mysqli_num_rows($row);
		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangnhap'] = $row_data['username'];
			$_SESSION['email'] = $row_data['username'];
            $_SESSION['id_khachhang']= $row_data['id_admin'];		
			header("Location: ../index.php");
		}
        else{
			$message = "Tài khoản mật khẩu không đúng";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
	}
    
    if(isset($_POST['dangky'])){  
        $taikhoan = $_POST['EmailSignUp'];
		$matkhau = $_POST['PasswordSignUp'];
        $nhaplaimatkhau = $_POST['ConfirmPasswordSignUp'];
        
        if ($matkhau == $nhaplaimatkhau) {
            $sql_dangky = "INSERT INTO tbl_admin(username, password) VALUES ('".$taikhoan."', '".$matkhau."')";
            $query_dangky=mysqli_query($mysqli,$sql_dangky);
            if($query_dangky){
                echo '<script>alert("Đăng ký thành công"); window.location.href = "signin.php";</script>';
            } else {
                echo '<script>alert("Tên tài khoản đã có người đăng ký")</script>';
            }
        } else {
            echo "<script type='text/javascript'>alert('Nhập lại mật khẩu sai');</script>";
        }
	} 
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Weekly Coding Challenge #1 -  Double slider Sign in/up Form - Desktop Only</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="../assets/css/signin.css">
</head>
<body>
<!-- partial:index.partial.html -->
<h2>Đăng Nhập/Đăng Ký</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="POST">
			<h1>Tạo tài khoản</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Hoặc sử dụng email của bạn</span>
			<input type="email" placeholder="Email" id="EmailSignUp" name="EmailSignUp" required/>
			<input type="password" placeholder="Password" id="PasswordSignUp" name="PasswordSignUp" required/>
            <input type="password" placeholder="Confirm Password" id="ConfirmPasswordSignUp" name="ConfirmPasswordSignUp" required/>
			<input type="submit" id="dangky" name="dangky" />
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="POST">
			<h1>Đăng Nhập</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Hoặc sử dụng tài khoản của bạn</span>
			<input type="email" placeholder="Email" id="Email" name="Email" required/>
			<input type="password" placeholder="Password" id="Password" name="Password" required/>
			
			<a href="#">Bạn quên mật khẩu ?</a>
            <input type="submit" id="dangnhap" name="dangnhap" value="Đăng nhập"/>
			<!-- <button>Sign In</button> -->
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Chào mừng</h1>
				<p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
				<button class="ghost" id="signIn">Đăng Nhập</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Xin chào, Bạn!</h1>
				<p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
				<button class="ghost" id="signUp">Đăng Ký</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>
<!-- partial -->
  <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
  </script>

</body>
</html>
