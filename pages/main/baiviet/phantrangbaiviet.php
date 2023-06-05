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

    if($categoryId == 0) {
        $scripts = "SELECT count(*) as total_record
            FROM `tbl_baiviet` AS bv
            JOIN tbl_danhmuc AS dm ON bv.id_danhmuc = dm.id_danhMuc
            WHERE (tieuDeBaiViet LIKE '%{$searching}%' OR noiDung LIKE '%{$searching}%')";
    } else {
        $scripts = "SELECT count(*) as total_record
                FROM `tbl_baiviet` AS bv
                JOIN tbl_danhmuc AS dm ON bv.id_danhmuc = dm.id_danhMuc
                WHERE (tieuDeBaiViet LIKE '%{$searching}%' OR noiDung LIKE '%{$searching}%') AND dm.id_danhmuc = " .$categoryId;
    }

    $query = mysqli_query($mysqli, $scripts);
    $tbl_row = mysqli_fetch_array($query);

    $total_page = ceil($tbl_row['total_record'] / 8);
?>

<div class="pagination-area pb-45 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <?php 
                                if ($current_page > 1) {
                                    echo '<li class="page-item"><a class="page-link" href="index.php?action=category&category_id='.$categoryId.'&current_page='.($current_page - 1).'&searching='.$searching.'"><span class="flaticon-arrow roted"></span></a></li>';
                                }
                                for ($i = 1; $i <= $total_page; $i++) {
                                    if ($current_page == $i) {
                                        echo '<li class="page-item active"><a class="page-link" href="index.php?action=category&category_id='.$categoryId.'&current_page='.$i.'&searching='.$searching.'">' . $i . '</a></li>';
                                    } else {
                                        echo '<li class="page-item"><a class="page-link" href="index.php?action=category&category_id='.$categoryId.'&current_page='.$i.'&searching='.$searching.'">' . $i . '</a></li>';
                                    }
                                }
                                if ($current_page < $total_page) {
                                    echo '<li class="page-item"><a class="page-link" href="index.php?action=category&category_id='.$categoryId.'&current_page='.($current_page + 1).'&searching='.$searching.'"><span class="flaticon-arrow right-arrow"></span></a></li>';
                                }
                            ?>
                        </ul>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</div>