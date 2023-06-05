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
                                        <p>Tạp chí điện tử Tri thức trực tuyến<br>
                                            Cơ quan chủ quản: Hội Xuất bản Việt Nam<br>
                                            Giấy phép báo chí: số 75/GP-BTTTT do Bộ Thông tin và Truyền thông cấp ngày 26/02/2020<br>
                                            Phó tổng biên tập phụ trách: Lâm Quang Hiếu<br>
                                            © Toàn bộ bản quyền thuộc Tri thức trực tuyến<br>
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
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Đăng ký nhận tin mới</h4>
                                <p>Bạn sẽ nhận được thông báo khi có tin mới nhất !</p>
                                <!-- Form -->

           
                                <div class="footer-form">
            
                                    <div id="mc_embed_signup">
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                    
                                    $(document).ready(function() {
                                        $('#themlienhe').submit(function(e) {
                                          
                                            var formData = $(this).serialize(); // Lấy dữ liệu form

                                            $.ajax({
                                            url: 'pages/main/lienhe/themlienhe.php',
                                            type: 'POST',
                                            data: formData,
                                            success: function(response) {
                                               
                                                // Xử lý phản hồi từ server
                                                if (response.success) {
                                                // Hiển thị thông báo gửi mail thành công
                                                alert('Đăng ký thành công!');
                                                } else {
                                                // Hiển thị thông báo lỗi gửi mail
                                                alert('Đã xảy ra lỗi khi đăng ký.');
                                                }
                                            },
                                           
                                            });
                                        });
                                    });
                                    </script>

                                        <form target="_blank" action="#" id="themlienhe" onsubmit="submitFormThemLienHe()">
                                            <input type="text" name="gmail" id="newsletter-form-email" placeholder="Gmail" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Gmail'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit1" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div  id="email-error" style="color: red;"></div>
                                            <input style="display: none;" type="text" name="id" value="<?php echo $id?>">

                                        </form>
                                        <script>
                                           // Lấy tham chiếu đến phần tử input email
                                                var emailInput = document.getElementById('newsletter-form-email');
                                                // Lấy tham chiếu đến nút submit
                                                var submitButton = document.getElementById('newsletter-submit');
                                                // Lấy tham chiếu đến phần tử thông báo lỗi
                                                var errorDiv = document.getElementById('email-error');

                                                // Gắn sự kiện kiểm tra email khi người dùng thay đổi nội dung trong input
                                                emailInput.addEventListener('input', function() {
                                                    // Lấy giá trị email từ input
                                                    var email = emailInput.value;

                                                    // Kiểm tra định dạng email
                                                    var isValidEmail = email.endsWith('@gmail.com');

                                                    // Hiển thị thông báo lỗi nếu email không hợp lệ
                                                    if (!isValidEmail) {
                                                        errorDiv.textContent = 'Định dạng Gmail không đúng';
                                                    } else {
                                                        errorDiv.textContent = ''; // Xóa thông báo lỗi nếu email hợp lệ
                                                    }

                                                    // Nếu email hợp lệ, bật nút submit, ngược lại tắt nút submit
                                                    submitButton.disabled = !isValidEmail;
                                                });
                                        </script>
                                            
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
                                   Trường Đại học Công Nghiệp Hà Nội - Bộ Công Thương
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Điều khoản</a></li>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>