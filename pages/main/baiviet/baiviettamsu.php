<?php 
include './admincp/config/config.php';
    $sql = "SELECT * FROM tbl_baivietts";
    $result = mysqli_query($mysqli, $sql);

?>

<div class="weekly2-news-area  weekly2-pading gray-bg">
    <div class="container">
        <div class="weekly2-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Tâm sự</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly2-news-active dot-style d-flex dot-style">
                    <?php
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <?php 
                                                $img_path = $row['HinhAnh'];
                                                echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $row['HinhAnh'] . '" alt="Hình ảnh" width="100%" height="200px"  style="object-fit:cover;">';
                                            ?>
                                        </div>
                                        <div class="weekly2-caption">
                                            <span class="color1"><?php echo $row["danhMuc"]; ?></span>
                                            <p><?php echo "dan dep trai" ?></p>
                                            <h4><a href="#"><?php echo $row["tieuDeBaiViet"]; ?></a></h4>
                                        </div>
                                    </div>
                                  
                            <?php
                                }
                            } else {
                                echo "Không có dữ liệu";
                            }

                            // Đóng kết nối
                            mysqli_close($mysqli);
                            ?>
                    
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
