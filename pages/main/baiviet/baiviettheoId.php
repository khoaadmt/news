<?php
   if (isset($_POST['commentsubmit'])) {
      
      $idKhachHang = intval($_POST['idKhachHang']);
      $idBaiViet = intval($_POST['idBaiViet']);
      $noidung = $_POST['noidung'];
      if ($idKhachHang == 0 || empty($noidung)) {
         echo "<script type='text/javascript'>alert('Bạn cần đăng nhập để thực hiện chức năng này');</script>";
         exit();
      }
      $script_comment = "INSERT INTO tbl_binhluan (id_account, id_baiviet, noidung) VALUES ($idKhachHang, $idBaiViet, '$noidung')";
      $query_comment = mysqli_query($mysqli, $script_comment);

   }

   if(isset($_GET['idbaiviet'])){
      $id_baiviet = $_GET['idbaiviet'];
   }

  if (isset($_POST['submit'])) {
      $idKhachHang = intval($_POST['idKhachHang']);
      $idBaiViet = intval($_POST['idBaiViet']);

      if ($idKhachHang == 0) {
          echo "<script type='text/javascript'>alert('Bạn cần đăng nhập để thực hiện chức năng này');</script>";
          exit();
      }

      $scripts_find_existed_like = "SELECT * FROM tbl_baivietyeuthich WHERE id_baiviet = " . $idBaiViet . " AND id_account = " . $idKhachHang . ";";
      $query_find_existed_like = mysqli_query($mysqli, $scripts_find_existed_like);
      $total_results = mysqli_num_rows($query_find_existed_like);

      if($total_results == 1) {
          $script_unlike = "DELETE FROM tbl_baivietyeuthich WHERE id_baiviet = " . $idBaiViet . " AND id_account = " . $idKhachHang . ";";
          $query_unlike = mysqli_query($mysqli, $script_unlike);
      } else {
       $script_like = "INSERT INTO tbl_baivietyeuthich (id_account, id_baiviet) VALUES (" . $idKhachHang . ", " . $idBaiViet . ")";
          $query_like = mysqli_query($mysqli, $script_like);
      }
  }

  $currentURL = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   $encoded_url = urlencode($currentURL);

   $parameters = "&layout&size&width=77&height=20&appId";
   $final_url = $encoded_url . $parameters;

   if(isset($_GET['idbaiviet'])){
      $id_baiviet = $_GET['idbaiviet'];
   }

   if (isset($_SESSION['id_khachhang'])) {
      $id_khach_hang = $_SESSION['id_khachhang'];
   } else {
      $id_khach_hang = 0;
   }

   $id_baiviet = intval($id_baiviet); 

   $scripts_get_bv_by_id = "SELECT * FROM tbl_baiviet WHERE id_baiViet = " . $id_baiviet;
   $query_get_bv_by_id = mysqli_query($mysqli, $scripts_get_bv_by_id);
   $tbl_row_bv = mysqli_fetch_array($query_get_bv_by_id);

   $scripts_get_total_comment = "SELECT COUNT(*) AS total_comment FROM tbl_binhluan WHERE id_baiviet = " . $id_baiviet;
   $query_get_total_comment = mysqli_query($mysqli, $scripts_get_total_comment);
   $tbl_row_total_comment = mysqli_fetch_array($query_get_total_comment);

   $scripts_get_comments = "SELECT noidung, a.username AS username 
                              FROM `tbl_binhluan` b 
                              JOIN tbl_admin a ON b.id_account = a.id_admin  WHERE id_baiviet = " . $id_baiviet;
   $query_get_comments = mysqli_query($mysqli, $scripts_get_comments);
   $tbl_row_get_comments = mysqli_fetch_array($query_get_comments);

   $scripts_get_total_like = "SELECT COUNT(*) AS total_like FROM tbl_baivietyeuthich WHERE id_baiviet = " . $id_baiviet;
   $query_get_total_like = mysqli_query($mysqli, $scripts_get_total_like);
   $tbl_row_total_like = mysqli_fetch_array($query_get_total_like);
?>

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                  <?php
                     if (isset($tbl_row_bv['hinhAnh']) && !empty($tbl_row_bv['hinhAnh'])) {
                        // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $tbl_row_bv['hinhAnh'];
                        echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $tbl_row_bv['hinhAnh'] . '" alt="" width="344" height="370">';
                     } else if (isset($tbl_row_bv['video'])) {
                        // echo "Video: " . $tbl_row_bv['video'];
                        echo '<iframe width="750" height="415" src="' . $tbl_row_bv['video'] . '" frameborder="0" allowfullscreen></iframe>';
                     } else {
                        // echo "Default Image";
                        echo '<img src="admincp\modules\quanlybaiviet\uploads\1685526202_345451550_217338341011625_710704284516695761_n.jpg" alt="" width="344" height="370">';
                     }
                     ?>
                  </div>
                  <div class="blog_details">
                     <h2>
                        <?php
                           echo $tbl_row_bv['tieuDeBaiViet'];
                        ?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li>
                           <a href="#"><i class="fa fa-user"></i>
                              <?php
                                 if (isset($tbl_row_bv['nguoiTao'])) {
                                    echo $tbl_row_bv['nguoiTao'];
                                 } else {
                                    echo 'Anonymous user';
                                 }
                              ?>
                           </a>
                        </li>
                        <li><a href="#">
                           <i class="fa fa-comments"></i> 
                                 <?php
                                    echo $tbl_row_total_comment['total_comment']
                                 ?>
                                 Bình luận
                           </a>
                        </li>
                     </ul>
                     <p class="excert">
                     <?php
                           echo $tbl_row_bv['noiDung'];
                        ?>
                     </p>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle">
                     <form method="post" action="">
                        <input type="hidden" name="idKhachHang" value="<?php echo $id_khach_hang ?>"/>
                        <input type="hidden" name="idBaiViet" value="<?php echo $id_baiviet ?>"/>
                        <button type="submit" class="icon-button" name="submit">
                           <i class="fa fa-heart"></i>
                        </button>
                     </form>
                     <?php
                        echo $tbl_row_total_like['total_like']
                     ?>
                     lượt thích
                     </p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     
                     <ul class="social-icons">
                     <iframe src="https://www.facebook.com/plugins/share_button.php?href=<?php echo $final_url ?>" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4>Space The Final Frontier</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
                  <h4>
                     <?php
                        echo $tbl_row_total_comment['total_comment']
                     ?>
                     Bình luận
                  </h4>
                  <?php
                  $total_records = mysqli_num_rows($query_get_comments);
                  while ($tbl_row_get_comments = mysqli_fetch_array($query_get_comments)) {
                      echo '
                          <div class="comment-list">
                              <div class="single-comment justify-content-between d-flex">
                                  <div class="user justify-content-between d-flex">
                                      <div class="thumb">
                                          <img src="assets/img/comment/comment_1.png" alt="">
                                      </div>
                                      <div class="desc">
                                          <p class="comment">
                                              '.$tbl_row_get_comments['noidung'].'
                                          </p>
                                          <div class="d-flex justify-content-between">
                                              <div class="d-flex align-items-center">
                                                  <h5>
                                                      <a href="#">'.$tbl_row_get_comments['username'].'</a>
                                                  </h5>
                                                  <p class="date">December 4, 2017 at 3:12 pm</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      ';
                  }
                  
                  ?>
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="" method="post">
                     <input type="hidden" name="idKhachHang" value="<?php echo $id_khach_hang ?>"/>
                     <input type="hidden" name="idBaiViet" value="<?php echo $id_baiviet ?>"/>
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="noidung" id="noidung" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <!-- <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div> -->
                     </div>
                     <div class="form-group">
                        <button type="submit" name="commentsubmit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btns" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p>Resaurant food</p>
                              <p>(37)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Travel news</p>
                              <p>(10)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Modern technology</p>
                              <p>(03)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Product</p>
                              <p>(11)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Inspiration</p>
                              <p>(21)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Health Care</p>
                              <p>(21)</p>
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <div class="media post_item">
                        <img src="assets/img/post/post_1.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>From life was you fish...</h3>
                           </a>
                           <p>January 12, 2019</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_2.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>The Amazing Hubble</h3>
                           </a>
                           <p>02 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_3.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Astronomy Or Astrology</h3>
                           </a>
                           <p>03 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_4.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Asteroids telescope</h3>
                           </a>
                           <p>01 Hours ago</p>
                        </div>
                     </div>
                  </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tag Clouds</h4>
                     <ul class="list">
                        <li>
                           <a href="#">project</a>
                        </li>
                        <li>
                           <a href="#">love</a>
                        </li>
                        <li>
                           <a href="#">technology</a>
                        </li>
                        <li>
                           <a href="#">travel</a>
                        </li>
                        <li>
                           <a href="#">restaurant</a>
                        </li>
                        <li>
                           <a href="#">life style</a>
                        </li>
                        <li>
                           <a href="#">design</a>
                        </li>
                        <li>
                           <a href="#">illustration</a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
