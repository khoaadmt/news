<?php 
    if(isset($_GET['category_id'])){
        $categoryId = $_GET['category_id'];
    }

    if (isset($_GET['searching'])) {
        $searching = $_GET['searching'];
    }

    if (isset($_GET['current_page'])) {
        $current_page = $_GET['current_page'];
    }

    $categoryId = intval($categoryId); 
    $offset = ($current_page - 1) * 6;
    if ($categoryId == 0) {
        $scripts = "SELECT id_baiViet, bv.id_danhmuc, dm.tenDanhMuc AS tendanhmuc, tieuDeBaiViet, bv.video AS video, bv.hinhAnh AS hinhAnh 
        FROM `tbl_baiviet` AS bv JOIN tbl_danhmuc AS dm ON bv.id_danhmuc = dm.id_danhMuc 
        WHERE (tieuDeBaiViet LIKE '%{$searching}%' OR noiDung LIKE '%{$searching}%')
        ORDER BY id_baiViet ASC LIMIT 6 OFFSET " . $offset;
    } else {
        $scripts = "SELECT id_baiViet, bv.id_danhmuc, dm.tenDanhMuc AS tendanhmuc, tieuDeBaiViet, bv.video AS video, bv.hinhAnh AS hinhAnh 
        FROM `tbl_baiviet` AS bv JOIN tbl_danhmuc AS dm ON bv.id_danhmuc = dm.id_danhMuc 
        WHERE (tieuDeBaiViet LIKE '%{$searching}%' OR noiDung LIKE '%{$searching}%') AND dm.id_danhmuc = {$categoryId}
        ORDER BY id_baiViet ASC LIMIT 6 OFFSET " . $offset;
    }
    
    $query = mysqli_query($mysqli, $scripts);
    $total_records = mysqli_num_rows($query);

?>

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
    <div class="whats-news-caption">
        <div class="row">
            <?php 
                for($i = 0; $i < $total_records; $i++) {
                    $tbl_row = mysqli_fetch_array($query);

                    echo '<div class="col-lg-6 col-md-6">
                            <div class="single-what-news mb-100">
                                <div class="what-img">';
                    if (isset($tbl_row['hinhAnh']) && !empty($tbl_row['hinhAnh'])) {
                        echo '<img src="admincp\modules\quanlybaiviet\uploads\\' . $tbl_row['hinhAnh'] . '" alt="" width="344" height="370">';
                    } else if (isset($tbl_row['video'])) {
                        echo '<iframe src="'.$tbl_row['video'].'" width="344" height="370" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    } else {
                        echo '<img src="admincp\modules\quanlybaiviet\uploads\1685526202_345451550_217338341011625_710704284516695761_n.jpg" alt="" width="344" height="370">';
                    }
                    echo '</div>
                            <div class="what-cap">
                                <span class="color1">'.$tbl_row['tendanhmuc'].'</span>
                                <h4><a href="index.php?action=post&idbaiviet='.$tbl_row['id_baiViet'].'">'.$tbl_row['tieuDeBaiViet'].'</a></h4>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>
</div>