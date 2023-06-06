
<?php
$sql_BaiViet = "SELECT b.*, dm.tenDanhMuc AS tenDanhMuc
FROM tbl_baiviet AS b
JOIN tbl_binhluan AS bl ON b.id_baiviet = bl.id_baiviet
JOIN tbl_danhmuc AS dm ON b.id_danhmuc = dm.id_danhmuc
GROUP BY b.id_baiviet, dm.tenDanhMuc
ORDER BY COUNT(*) DESC
LIMIT 4";
$query_bv = mysqli_query($mysqli, $sql_BaiViet);
$row_bv_title = mysqli_fetch_array($query_bv);
?>
<div class="weekly-news-area pt-50">
    <div class="container">
        <div class="weekly-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Weekly Top News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly-news-active dot-style d-flex dot-style">                        
                        <div class="weekly-single">
                            <div class="weekly-img">
                                <?php
                                    $bv = mysqli_data_seek($query_bv, 0);
                                    $record = mysqli_fetch_array($query_bv);
                                    if (isset($record['hinhAnh']) && !empty($record['hinhAnh'])) {
                                        // echo "Image: admincp\modules\quanlybaiviet\uploads\\" . $record['hinhAnh'];
                                        echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $record['hinhAnh'] . '" alt="" width="344" height="370">';
                                     } else if (isset($record['video'])) {
                                        // echo "Video: " . $record['video'];
                                        echo '<iframe width="750" height="415" src="' . $record['video'] . '" frameborder="0" allowfullscreen></iframe>';
                                     } else {
                                        // echo "Default Image";
                                        echo '<img src="admincp\modules\quanlybaiviet\uploads\download.jpg" alt="" width="344" height="370">';
                                     }
                                ?>
                            </div>
                            <div class="weekly-caption">
                                <span class="color1">
                                    <?php
                                        echo $record['tenDanhMuc'];
                                    ?>
                                    </span>
                                <h4><a href="#"><?php echo $record['tieuDeBaiViet']; ?></a></h4>
                            </div>
                        </div>                        
                        <div class="weekly-single">
                            <div class="weekly-img">
                            <?php
                                    $bv = mysqli_data_seek($query_bv, 1);
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
                            </div>
                            <div class="weekly-caption">
                                <span class="color1">
                                    <?php
                                        echo $record['tenDanhMuc'];
                                    ?>
                                </span>
                                <h4><a href="#"><?php echo $record['tieuDeBaiViet']; ?></a></h4>
                            </div>
                        </div>
                        <div class="weekly-single">
                            <div class="weekly-img">
                            <?php
                                    $bv = mysqli_data_seek($query_bv, 2);
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
                            </div>
                            <div class="weekly-caption">
                                <span class="color1">
                                    <?php
                                        echo $record['tenDanhMuc'];
                                    ?>
                                </span>
                                <h4><a href="#"><?php echo $record['tieuDeBaiViet']; ?></a></h4>
                            </div>
                        </div>
                        <div class="weekly-single">
                            <div class="weekly-img">
                            <?php
                                    $bv = mysqli_data_seek($query_bv, 3);
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
                            </div>
                            <div class="weekly-caption">
                                <span class="color1">
                                    <?php
                                        echo $record['tenDanhMuc'];
                                    ?>
                                </span>
                                <h4><a href="#"><?php echo $record['tieuDeBaiViet']; ?></a></h4>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>