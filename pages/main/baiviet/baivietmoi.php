
<?php
$sql_BaiViet = "SELECT b.*, dm.tenDanhMuc AS tenDanhMuc
FROM tbl_baiviet AS b
JOIN tbl_danhmuc AS dm ON b.id_danhmuc = dm.id_danhmuc
ORDER BY ngayTao DESC
LIMIT 9";
$query_bv = mysqli_query($mysqli, $sql_BaiViet);
$row_bv_title = mysqli_fetch_array($query_bv);

?>
<div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                
                                <?php
                                    $bv = mysqli_data_seek($query_bv, 0);
                                    $record = mysqli_fetch_assoc($query_bv);
                                    if (isset($record['hinhAnh']) && !empty($record['hinhAnh'])) {
                                        // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $record['hinhAnh'];
                                        echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $record['hinhAnh'] . '" alt="" width="344" height="370">';
                                     } else if (isset($record['video'])) {
                                        // echo "Video: " . $record['video'];
                                        echo '<iframe width="750" height="415" src="' . $record['video'] . '" frameborder="0" allowfullscreen></iframe>';
                                     } else {
                                        // echo "Default Image";
                                        echo '<img src="admincp\modules\quanlybaiviet\uploads\1685872480_tang-bo-hoa-lam-tu-nhung-con-gian.jpg" alt="" width="344" height="370">';
                                     }
                                ?>
                                <div class="trend-top-cap">
                                    <span>
                                        <?php
                                        echo $record['tenDanhMuc'];
                                        ?>
                                    </span>
                                    <h2><a href="details.html"><?php echo $record['tieuDeBaiViet']; ?></a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <?php
                                            $bv = mysqli_data_seek($query_bv, 1);
                                            $record = mysqli_fetch_assoc($query_bv);
                                            if (isset($record['hinhAnh']) && !empty($record['hinhAnh'])) {
                                                // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $record['hinhAnh'];
                                                echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $record['hinhAnh'] . '" alt="" width="230" height="160">';
                                             } else if (isset($record['video'])) {
                                                // echo "Video: " . $record['video'];
                                                echo '<iframe width="230" height="160" src="' . $record['video'] . '" frameborder="0" allowfullscreen></iframe>';
                                             } else {
                                                // echo "Default Image";
                                                echo '<img src="admincp\modules\quanlybaiviet\uploads\1685872480_tang-bo-hoa-lam-tu-nhung-con-gian.jpg" alt="" width="230" height="160">';
                                             }
                                        ?>
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">
                                        <?php
                                        
                                        echo $record['tenDanhMuc'];
                                        ?>
                                        </span>
                                        <h4><a href="details.html"><?php echo $record['tieuDeBaiViet']; ?></a></h4>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                        <?php
                                            $bv = mysqli_data_seek($query_bv, 2);
                                            $record = mysqli_fetch_assoc($query_bv);
                                            if (isset($record['hinhAnh']) && !empty($record['hinhAnh'])) {
                                                // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $record['hinhAnh'];
                                                echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $record['hinhAnh'] . '" alt="" width="230" height="160">';
                                             } else if (isset($record['video'])) {
                                                // echo "Video: " . $record['video'];
                                                echo '<iframe width="230" height="160" src="' . $record['video'] . '" frameborder="0" allowfullscreen></iframe>';
                                             } else {
                                                // echo "Default Image";
                                                echo '<img src="admincp\modules\quanlybaiviet\uploads\1685872480_tang-bo-hoa-lam-tu-nhung-con-gian.jpg" alt="" width="230" height="160">';
                                             }
                                        ?>
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color2">
                                            <?php
                                            echo $record['tenDanhMuc'];
                                            ?>
                                            </span>
                                            <h4><h4><a href="details.html"><?php echo $record['tieuDeBaiViet']; ?></a></h4></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                        <?php
                                            $bv = mysqli_data_seek($query_bv, 3);
                                            $record = mysqli_fetch_assoc($query_bv);
                                            if (isset($record['hinhAnh']) && !empty($record['hinhAnh'])) {
                                                // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $record['hinhAnh'];
                                                echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $record['hinhAnh'] . '" alt="" width="230" height="160">';
                                             } else if (isset($record['video'])) {
                                                // echo "Video: " . $record['video'];
                                                echo '<iframe width="230" height="160" src="' . $record['video'] . '" frameborder="0" allowfullscreen></iframe>';
                                             } else {
                                                // echo "Default Image";
                                                echo '<img src="admincp\modules\quanlybaiviet\uploads\1685872480_tang-bo-hoa-lam-tu-nhung-con-gian.jpg" alt="" width="230" height="160">';
                                             }
                                        ?>
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">
                                            <?php
                                                echo $record['tenDanhMuc'];
                                            ?>
                                            </span>
                                            <h4><a href="details.html"> <?php echo $record['tieuDeBaiViet']; ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                            <?php
                                $bv = mysqli_data_seek($query_bv, 4);
                                $record = mysqli_fetch_assoc($query_bv);
                                if (isset($record['hinhAnh']) && !empty($record['hinhAnh'])) {
                                    // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $record['hinhAnh'];
                                    echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $record['hinhAnh'] . '" alt="" width="120" height="100">';
                                } else if (isset($record['video'])) {
                                    // echo "Video: " . $record['video'];
                                    echo '<iframe width="120" height="100" src="' . $record['video'] . '" frameborder="0" allowfullscreen></iframe>';
                                } else {
                                    // echo "Default Image";
                                    echo '<img src="admincp\modules\quanlybaiviet\uploads\1685872480_tang-bo-hoa-lam-tu-nhung-con-gian.jpg" alt=""width="120" height="100">';
                                }
                            ?>
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">
                                <?php
                                    echo $record['tenDanhMuc'];
                                ?>
                                </span>
                                <h4><a href="details.html"><?php echo $record['tieuDeBaiViet']; ?></a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                            <?php
                                $bv = mysqli_data_seek($query_bv, 5);
                                $record = mysqli_fetch_assoc($query_bv);
                                if (isset($record['hinhAnh']) && !empty($record['hinhAnh'])) {
                                    // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $record['hinhAnh'];
                                    echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $record['hinhAnh'] . '" alt="" width="120" height="100">';
                                } else if (isset($record['video'])) {
                                    // echo "Video: " . $record['video'];
                                    echo '<iframe width="120" height="100" src="' . $record['video'] . '" frameborder="0" allowfullscreen></iframe>';
                                } else {
                                    // echo "Default Image";
                                    echo '<img src="admincp\modules\quanlybaiviet\uploads\1685872480_tang-bo-hoa-lam-tu-nhung-con-gian.jpg" alt="" width="120" height="100">';
                                }
                            ?>
                            </div>
                            <div class="trand-right-cap">
                                <span class="color3">
                                <?php
                                    echo $record['tenDanhMuc'];
                                ?>
                                </span>
                                <h4><a href="details.html"><?php echo $record['tieuDeBaiViet']; ?></a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                            <?php
                                $bv = mysqli_data_seek($query_bv, 6);
                                $record = mysqli_fetch_assoc($query_bv);
                                if (isset($record['hinhAnh']) && !empty($record['hinhAnh'])) {
                                    // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $record['hinhAnh'];
                                    echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $record['hinhAnh'] . '" alt="" width="120" height="100">';
                                } else if (isset($record['video'])) {
                                    // echo "Video: " . $record['video'];
                                    echo '<iframe width="120" height="100" src="' . $record['video'] . '" frameborder="0" allowfullscreen></iframe>';
                                } else {
                                    // echo "Default Image";
                                    echo '<img src="admincp\modules\quanlybaiviet\uploads\1685872480_tang-bo-hoa-lam-tu-nhung-con-gian.jpg" alt="" width="120" height="100">';
                                }
                            ?>
                            </div>
                            <div class="trand-right-cap">
                                <span class="color2">
                                <?php
                                    echo $record['tenDanhMuc'];
                                ?>
                                </span>
                                <h4><a href="details.html"><?php echo $record['tieuDeBaiViet']; ?></a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                            <?php
                                $bv = mysqli_data_seek($query_bv, 7);
                                $record = mysqli_fetch_assoc($query_bv);
                                if (isset($record['hinhAnh']) && !empty($record['hinhAnh'])) {
                                    // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $record['hinhAnh'];
                                    echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $record['hinhAnh'] . '" alt="" width="120" height="100">';
                                } else if (isset($record['video'])) {
                                    // echo "Video: " . $record['video'];
                                    echo '<iframe width="120" height="100" src="' . $record['video'] . '" frameborder="0" allowfullscreen></iframe>';
                                } else {
                                    // echo "Default Image";
                                    echo '<img src="admincp\modules\quanlybaiviet\uploads\1685872480_tang-bo-hoa-lam-tu-nhung-con-gian.jpg" alt="" width="120" height="100">';
                                }
                            ?>
                            </div>
                            <div class="trand-right-cap">
                                <span class="color4">
                                <?php
                                    echo $record['tenDanhMuc'];
                                ?>
                                </span>
                                <h4><a href="details.html"><?php echo $record['tieuDeBaiViet']; ?></a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                            <?php
                                $bv = mysqli_data_seek($query_bv, 8);
                                $record = mysqli_fetch_assoc($query_bv);
                                if (isset($record['hinhAnh']) && !empty($record['hinhAnh'])) {
                                    // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $record['hinhAnh'];
                                    echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $record['hinhAnh'] . '" alt="" width="120" height="100">';
                                } else if (isset($record['video'])) {
                                    // echo "Video: " . $record['video'];
                                    echo '<iframe width="120" height="100" src="' . $record['video'] . '" frameborder="0" allowfullscreen></iframe>';
                                } else {
                                    // echo "Default Image";
                                    echo '<img src="admincp\modules\quanlybaiviet\uploads\1685872480_tang-bo-hoa-lam-tu-nhung-con-gian.jpg" alt="" width="120" height="100">';
                                }
                            ?>
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">
                                <?php
                                    echo $record['tenDanhMuc'];
                                ?>
                                </span>
                                <h4><a href="details.html"><?php echo $record['tieuDeBaiViet']; ?></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    