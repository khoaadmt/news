<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>News HTML-5 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.ico"
    />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/ticker-style.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/dk_dn.css" />
    <link rel="stylesheet" href="assets/css/form_DN.css" />
    <link rel="stylesheet" href="./assets/css/login.css" />
  </head>

  <body>
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
      <!-- Header Start -->
      <div class="header-area home">
        <div class="main-header">
          <div class="header-top black-bg d-none d-md-block">
            <div class="container">
              <div class="col-xl-12">
                <div
                  class="row d-flex justify-content-between align-items-center"
                >
                  <div class="header-info-left">
                    <ul>
                      <li>
                        <img
                          src="assets/img/icon/header_icon1.png"
                          alt=""
                        />34ºc, Sunny
                      </li>
                      <li>
                        <img
                          src="assets/img/icon/header_icon1.png"
                          alt=""
                        /><?php
                            date_default_timezone_set('Asia/Ho_Chi_Minh');

                            $currentTime = date('l, dS F, Y');
                            echo $currentTime;
                            ?>
                      </li>
                    </ul>
                  </div>
                  <div class="header-info-right">
                    <ul class="header-social">
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      </li>
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
                    <a href="index.html"
                      ><img src="assets/img/logo/logo.png" alt=""
                    /></a>
                  </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9">
                  <div class="header-banner f-right">
                    <img src="assets/img/hero/header_card.jpg" alt="" />
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
                    <a href="index.html"
                      ><img src="assets/img/logo/logo.png" alt=""
                    /></a>
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
                        <input type="text" placeholder="Search" />
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
                  <input
                    type="password"
                    placeholder="Enter your password"
                    required
                  />
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

                <div class="login_signup">
                  Don't have an account? <a href="#" id="signup">Sign up</a>
                </div>
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
                  <input
                    type="password"
                    placeholder="Create password"
                    required
                  />
                  <i class="uil uil-lock password"></i>
                  <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class="input_box">
                  <input
                    type="password"
                    placeholder="Confirm password"
                    required
                  />
                  <i class="uil uil-lock password"></i>
                  <i class="uil uil-eye-slash pw_hide"></i>
                </div>

                <button class="button">Sign up Now</button>

                <div class="login_signup">
                  Already have an account? <a href="#" id="login">Login</a>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
      <script src="./assets/js/login.js"></script>
      <!-- Header End -->
    </header>

    <main>
      <!-- Whats New Start -->
      <section class="whats-news-area pt-50 pb-20">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row d-flex justify-content-between">
                <div class="col-lg-3 col-md-3">
                  <div class="section-tittle mb-30">
                    <h3>Whats New</h3>
                  </div>
                </div>
                <div class="col-lg-9 col-md-9">
                  <div class="properties__button">
                    <!--Nav Button  -->
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a
                          class="nav-item nav-link"
                          data-toggle="tab"
                          href="#nav-techno"
                          role="tab"
                          aria-selected="false"
                          >ALL</a
                        >
                        <?php       
                          $mysqli = new mysqli("localhost","root","","newsdb");
                          $sql_query = "SELECT * FROM tbl_danhmuc ORDER BY thuTu";
                          $query_lietke_danhmuc =  mysqli_query($mysqli,$sql_query);
                          while($row = mysqli_fetch_array($query_lietke_danhmuc)){
                        ?>
                        <a
                          class="nav-item nav-link"
                          data-toggle="tab"
                          href="#nav-techno"
                          role="tab"
                          aria-selected="false"
                          ><?php echo $row['tenDanhMuc'] ?></a
                        >
                        <?php
                          }
                        ?>
                      </div>
                    </nav>
                    <!--End Nav Button  -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <!-- Nav Card -->
                  <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div
                      class="tab-pane fade show active"
                      id="nav-home"
                      role="tabpanel"
                      aria-labelledby="nav-home-tab"
                    >
                      <div class="whats-news-caption">
                        <div class="row">
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews3.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews4.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Card two -->
                    <div
                      class="tab-pane fade"
                      id="nav-profile"
                      role="tabpanel"
                      aria-labelledby="nav-profile-tab"
                    >
                      <div class="whats-news-caption">
                        <div class="row">
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews3.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews4.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Card three -->
                    <div
                      class="tab-pane fade"
                      id="nav-contact"
                      role="tabpanel"
                      aria-labelledby="nav-contact-tab"
                    >
                      <div class="whats-news-caption">
                        <div class="row">
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews3.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews4.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- card fure -->
                    <div
                      class="tab-pane fade"
                      id="nav-last"
                      role="tabpanel"
                      aria-labelledby="nav-last-tab"
                    >
                      <div class="whats-news-caption">
                        <div class="row">
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews3.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews4.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- card Five -->
                    <div
                      class="tab-pane fade"
                      id="nav-nav-Sport"
                      role="tabpanel"
                      aria-labelledby="nav-Sports"
                    >
                      <div class="whats-news-caption">
                        <div class="row">
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews3.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews4.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- card Six -->
                    <div
                      class="tab-pane fade"
                      id="nav-techno"
                      role="tabpanel"
                      aria-labelledby="nav-technology"
                    >
                      <div class="whats-news-caption">
                        <div class="row">
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews3.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                              <div class="what-img">
                                <img
                                  src="assets/img/news/whatNews4.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4>
                                  <a href="#"
                                    >Welcome To The Best Model Winner Contest</a
                                  >
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Nav Card -->
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- Section Tittle -->
              <div class="section-tittle mb-40">
                <h3>Follow Us</h3>
              </div>
              <!-- Flow Socail -->
              <div class="single-follow mb-45">
                <div class="single-box">
                  <div class="follow-us d-flex align-items-center">
                    <div class="follow-social">
                      <a href="#"
                        ><img src="assets/img/news/icon-fb.png" alt=""
                      /></a>
                    </div>
                    <div class="follow-count">
                      <span>8,045</span>
                      <p>Fans</p>
                    </div>
                  </div>
                  <div class="follow-us d-flex align-items-center">
                    <div class="follow-social">
                      <a href="#"
                        ><img src="assets/img/news/icon-tw.png" alt=""
                      /></a>
                    </div>
                    <div class="follow-count">
                      <span>8,045</span>
                      <p>Fans</p>
                    </div>
                  </div>
                  <div class="follow-us d-flex align-items-center">
                    <div class="follow-social">
                      <a href="#"
                        ><img src="assets/img/news/icon-ins.png" alt=""
                      /></a>
                    </div>
                    <div class="follow-count">
                      <span>8,045</span>
                      <p>Fans</p>
                    </div>
                  </div>
                  <div class="follow-us d-flex align-items-center">
                    <div class="follow-social">
                      <a href="#"
                        ><img src="assets/img/news/icon-yo.png" alt=""
                      /></a>
                    </div>
                    <div class="follow-count">
                      <span>8,045</span>
                      <p>Fans</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- New Poster -->
              <div class="news-poster d-none d-lg-block">
                <img src="assets/img/news/news_card.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Whats New End -->

      <!--Start pagination -->
      <div class="pagination-area pb-45 text-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="single-wrap d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-start">
                    <li class="page-item">
                      <a class="page-link" href="#"
                        ><span class="flaticon-arrow roted"></span
                      ></a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">01</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">02</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">03</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#"
                        ><span class="flaticon-arrow right-arrow"></span
                      ></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End pagination  -->
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
                    <a href="index.html"
                      ><img src="assets/img/logo/logo2_footer.png" alt=""
                    /></a>
                  </div>
                  <div class="footer-tittle">
                    <div class="footer-pera">
                      <p>
                        Suscipit mauris pede for con sectetuer sodales adipisci
                        for cursus fames lectus tempor da blandit gravida
                        sodales Suscipit mauris pede for con sectetuer sodales
                        adipisci for cursus fames lectus tempor da blandit
                        gravida sodales Suscipit mauris pede for sectetuer.
                      </p>
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
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-footer-caption mt-60">
                <div class="footer-tittle">
                  <h4>Newsletter</h4>
                  <p>Heaven fruitful doesn't over les idays appear creeping</p>
                  <!-- Form -->
                  <div class="footer-form">
                    <div id="mc_embed_signup">
                      <form
                        target="_blank"
                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get"
                        class="subscribe_form relative mail_part"
                      >
                        <input
                          type="email"
                          name="email"
                          id="newsletter-form-email"
                          placeholder="Email Address"
                          class="placeholder hide-on-focus"
                          onfocus="this.placeholder = ''"
                          onblur="this.placeholder = ' Email Address '"
                        />
                        <div class="form-icon">
                          <button
                            type="submit"
                            name="submit"
                            id="newsletter-submit"
                            class="email_icon newsletter-submit button-contactForm"
                          >
                            <img src="assets/img/logo/form-iocn.png" alt="" />
                          </button>
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
                      <a href="#"
                        ><img src="assets/img/post/instra1.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="assets/img/post/instra2.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="assets/img/post/instra3.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="assets/img/post/instra4.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="assets/img/post/instra5.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="assets/img/post/instra6.jpg" alt=""
                      /></a>
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
                    </script>
                    All rights reserved | This template is made with
                    <i class="ti-heart" aria-hidden="true"></i> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
  </body>
</html>
