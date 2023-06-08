<?php
    if(isset($_GET['category_id'])){
        $categoryId = $_GET['category_id'];
    }

    $scripts = 'SELECT * FROM tbl_danhmuc ORDER BY thuTu DESC';
    $query = mysqli_query($mysqli, $scripts);
    
    $total_records = mysqli_num_rows($query);
?>

<!--Nav Button  -->                                            
<nav>                                                                     
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <?php
            if ($categoryId == 0) {
                echo '<a class="nav-item nav-link active" id="nav-home-tab" href="index.php?action=category&category_id=0&current_page=1&searching=" role="tab" aria-controls="nav-home" aria-selected="true">All</a>';
            } else {
                echo '<a class="nav-item nav-link" id="nav-home-tab" href="index.php?action=category&category_id=0&current_page=1&searching=" role="tab" aria-controls="nav-home" aria-selected="true">All</a>';
            }

            for ($i = 0; $i < $total_records; $i++) {
                $tbl_row = mysqli_fetch_array($query);
                if ($categoryId == $tbl_row['id_danhMuc']) {
                    echo '<a class="nav-item nav-link active" id="nav-profile-tab" href="index.php?action=category&category_id=' . $tbl_row['id_danhMuc'] . '&current_page=1&searching=" role="tab" aria-controls="nav-profile" aria-selected="false">' . $tbl_row['tenDanhMuc'] . '</a>';
                } else {
                    echo '<a class="nav-item nav-link" id="nav-profile-tab" href="index.php?action=category&category_id=' . $tbl_row['id_danhMuc'] . '&current_page=1&searching=" role="tab" aria-controls="nav-profile" aria-selected="false">' . $tbl_row['tenDanhMuc'] . '</a>';
                }
            }
        ?>
</nav>
<!--End Nav Button  -->