<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/ticker-style.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">

    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/dk_dn.css">
    <link rel="stylesheet" href="assets/css/form_DN.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

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
                                        <li><img src="assets/img/icon/header_icon1.png" alt=""><?php
                            date_default_timezone_set('Asia/Ho_Chi_Minh');

                            $currentTime = date('l, dS F, Y');
                            echo $currentTime;
                            ?></li>
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
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="categori.php">Category</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="latest_news.php">Latest News</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.php">Element</a></li>
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="single-blog.php">Blog Details</a></li>
                                                    <li><a href="details.php">Categori Details</a></li>
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
                        <form action="#">
                            <h2>Login</h2>
                            <button class="close-btn">X</button>
                            <div class="input_box">
                                <input type="email" placeholder="Enter your email" required />
                                <i class="uil uil-envelope-alt email"></i>
                            </div>
                            <div class="input_box">
                                <input type="password" placeholder="Enter your password" required />
                                <i class="uil uil-lock password"></i>
                                <i class="uil uil-eye-slash pw_hide"></i>
                            </div>

                            <div class="option_field">
                                <span class="checkbox">
                        <input type="checkbox" id="check" />
                        <label for="check">Remember me</label>
                      </span>
                                <a href="#" class="forgot_pw">Forgot password?</a>
                            </div>

                            <button class="button" id="loginNow">Login Now</button>

                            <div class="login_signup">Don't have an account? <a href="#" id="signup">Sign up</a></div>
                        </form>
                    </div>

                    <!-- Signup From -->
                    <div class="form signup_form">
                        <form action="#">
                            <h2>Sign up</h2>

                            <div class="input_box">
                                <input type="email" placeholder="Enter your email" required />
                                <i class="uil uil-envelope-alt email"></i>
                            </div>
                            <div class="input_box">
                                <input type="password" placeholder="Create password" required />
                                <i class="uil uil-lock password"></i>
                                <i class="uil uil-eye-slash pw_hide"></i>
                            </div>
                            <div class="input_box">
                                <input type="password" placeholder="Confirm password" required />
                                <i class="uil uil-lock password"></i>
                                <i class="uil uil-eye-slash pw_hide"></i>
                            </div>

                            <button class="button">Sign up Now</button>

                            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
                        </form>
                    </div>
                </div>
            </section>

        </div>
        <script src="./assets/js/login.js"></script>
        <!-- Header End -->
    </header>

    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                <!-- Hot Aimated News Tittle-->
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="about-right mb-90">
                            <div class="section-tittle mb-30 pt-30">
                                <h2>Tiêu đề bài viết ở đây</h2>
                                <p class="author">Tác giả: Nguyễn Dẫn</p>
		                        <p class="date">Ngày đăng: 24 tháng 5 năm 2023</p>
                                <h4>Mô tả bài viết ở đây</h4>
				<p>click vào đây để nghe!</p>
                                <audio src="" volume controls ></audio>
                            </div>
                            <div class="about-img" >
                                <img src="assets/img/trending/trending_top.jpg" alt="Ảnh ở đây">
                                <p>Chú thích ảnh ở đây</p>
                            </div>
                            <div class="about-prea">
                                <p class="about-pera1 mb-25">
                                    My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her
                                    image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from. the refractor telescope uses a convex lens to focus the light on the eyepiece. The reflector telescope
                                    has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see. Collimation is a term for how well tuned the telescope is to give you a good clear image of what you are looking
                                    at. You want your telescope to have good collimation so you are not getting a false image of the celestial body. Aperture is a fancy word for how big the lens of your telescope is. But it’s an important word because
                                    the aperture of the lens is the key to how powerful your telescope is. Magnification has nothing to do with it, its all in the aperture. Focuser is the housing that keeps the eyepiece of the telescope, or what you will
                                    look through, in place. The focuser has to be stable and in good repair for you to have an image you can rely on. Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual
                                    tripod and the wedge is the device that lets you attach the telescope to the mount. Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to
                                    school lunch.</p>
                            </div>
                            <div class="section-tittle">
                                <h3>Phần quan trọng trong nội dung bài viết</h3>
                            </div>
                            <div class="about-prea">
                                <p class="about-pera1 mb-25">The refractor telescope uses a convex lens to focus the light on the eyepiece. The reflector telescope has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see.</p>
                                <p class="about-pera1 mb-25">Collimation is a term for how well tuned the telescope is to give you a good clear image of what you are looking at. You want your telescope to have good collimation so you are not getting a false image of the celestial
                                    body.
                                </p>
                                <p class="about-pera1 mb-25">
                                    My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her
                                    image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from. the refractor telescope uses a convex lens to focus the light on the eyepiece. The reflector telescope
                                    has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see. Collimation is a term fo Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones
                                    who make sure things happen—from birth to school lunch.</p>
                                    <div class="about-img" >
                                        <img src="assets/img/trending/trending_top.jpg" alt="Ảnh ở đây">
                                        <p>Chú thích ảnh ở đây</p>
                                    </div>
                                <p class="about-pera1 mb-25">
                                    Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount. Moms are like…buttons? Moms are like glue. Moms are like pizza
                                    crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                                    <div class="about-img" >
                                        <img src="assets/img/trending/trending_top.jpg" alt="Ảnh ở đây">
                                        <p>Chú thích ảnh ở đây</p>
                                    </div>
                                <p class="about-pera1 mb-25">
                                    Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount. Moms are like…buttons? Moms are like glue. Moms are like pizza
                                    crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                                <article ></article>
                                <div class="baiviet_lq">
                                <div class="baiviet">
                                    <img src="assets/img/trending/trending_top.jpg" alt="">
                                    <span><a href="">bai viet lien quan 1</a></span>
                                </div>
                                <div class="baiviet">
                                    <img src="assets/img/trending/trending_top.jpg" alt="">
                                    <span><a href="">bai viet lien quan 1</a></span>
                                </div>
                                <div class="baiviet">
                                    <img src="assets/img/trending/trending_top.jpg" alt="">
                                    <span><a href="">bai viet lien quan 1</a></span>
                                </div>
                            
                            </div>
                            <article class="line_bottom"></article>
                            </div>
                            <div class="like-container">
                                <i class="like-icon fas fa-heart"></i>
                                <span class="like-count">0</span>
                            </div>
                            
                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>
                                    <ul>
                                        <li>
                                            <a href="https://www.instagram.com/"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:5500/aznews-master/details.html"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/share?url=http://127.0.0.1:5500/aznews-master/details.html&text=baivietcuatoi"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/upload/default?&amp;title=baivietcuatoi&amp;video_description=baiviet&amp;video_tags=baivietnoibat&amp;video_path=http://127.0.0.1:5500/aznews-master/details.html"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
        <!-- About US End -->
    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit
                                            gravida sodales Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li>
                                        <a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Breaking New Pluging -->
    <script src="./assets/js/jquery.ticker.js"></script>
    <script src="./assets/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <!-- thả tym -->
    <script src="./assets/js/tym.js"></script>

</body>

</html>
