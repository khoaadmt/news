<?php
    include('admincp/config/config.php');   
    if(isset($_POST['signup'])) {
        $email = $_POST['email'];
        $password= $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if (!empty($email) && !empty($password) && !empty($confirmPassword))
        {
            if($password!=$confirmPassword){
                echo "mat khau chua trung"; 
            } else {
                $sql_dangky = "INSERT INTO tbl_admin(username, password) VALUES ('".$email."', '".$password."')";

                $query_dangky=mysqli_query($mysqli,$sql_dangky);
                if($query_dangky){
                    echo '<script>alert("Đăng ký thành công")</script>';

                } else {
                    echo '<script>alert("Tên tài khoản đã có người đăng ký")</script>';
                }
            }
        }
        else {
            echo "Vui lòng nhập đầy đủ thông tin.";
        }
    }
    if(isset($_POST['loginNow'])) {
        $email = $_POST['emailLogin'];
        $password= $_POST['passwordLogin'];

        if (!empty($email) && !empty($password)) {
            $sql_nguoidung = "SELECT * FROM tbl_admin WHERE username = '".$email."' AND password = '".$password."'";
            $result = mysqli_query($mysqli, $sql_nguoidung);
    
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['dangnhap'] = $email;
                header("Location: news/index.php");
                exit();
            } else {
                $message = "Tài khoản hoặc mật khẩu không đúng";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        } else {
            echo "Vui lòng nhập đầy đủ thông tin.";
        }
    }
?>

<header>
    <!-- Header Start -->
    <div class="header-area home">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li><img src="assets/img/icon/header_icon1.png" alt="">34ºc, Sunny </li>
                                    <li><img src="assets/img/icon/header_icon1.png" alt="">Tuesday, 18th June, 2019</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="assets/img/hero/header_card.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="categori.html">Category</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="latest_news.html">Latest News</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Element</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="details.html">Categori Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-4 search">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    <form action="#">
                                        <input type="text" placeholder="Search">

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="DN_DK">
                            <button class="dk_dn" id="form-open" onclick="">Login</button>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Home -->
        <section class="home">
            <div class="form_container">
                <i class="uil uil-times form_close"></i>
                <!-- Login From -->
                <div class="form login_form">
                    <form action="" method="post">
                        <h2>Login</h2>
                        <button class="close-btn">X</button>
                        <div class="input_box">
                            <input type="email" placeholder="Enter your email" name="emailLogin" required />
                            <i class="uil uil-envelope-alt email"></i>
                        </div>
                        <div class="input_box">
                            <input type="password" placeholder="Enter your password" name="passwordLogin" required />
                            <i class="uil uil-lock password"></i>
                            <i class="uil uil-eye-slash pw_hide"></i>
                        </div>

                        <div class="option_field">
                            <span class="checkbox">
                    <!-- <input type="checkbox" id="check" />
                    <label for="check">Remember me</label> -->
                    </span>
                            <a href="#" class="forgot_pw">Forgot password?</a>
                        </div>

                        <button class="button" id="loginNow" name="loginNow">Login Now</button>

                        <div class="login_signup">Don't have an account? <a href="#" id="signup">Sign up</a></div>
                    </form>
                </div>

                <!-- Signup From -->
                <div class="form signup_form">
                    <form action="" method="post">
                        <h2>Sign up</h2>

                        <div class="input_box">
                            <input type="email" placeholder="Enter your email" name="email" required />
                            <i class="uil uil-envelope-alt email"></i>
                        </div>
                        <div class="input_box">
                            <input type="password" placeholder="Create password" name="password" required />
                            <i class="uil uil-lock password"></i>
                            <i class="uil uil-eye-slash pw_hide"></i>
                        </div>
                        <div class="input_box">
                            <input type="password" placeholder="Confirm password" name="confirmPassword" required />
                            <i class="uil uil-lock password"></i>
                            <i class="uil uil-eye-slash pw_hide"></i>
                        </div>

                        <button class="button" name="signup" id="signup">Sign up Now</button>

                        <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
                    </form>
                </div>
            </div>
        </section>

    </div>
    <script src="./assets/js/login.js"></script>
    <!-- Header End -->
</header>