<?php
    $scripts = 'SELECT * FROM tbl_danhmuc ORDER BY thuTu DESC';
    $query = mysqli_query($mysqli, $scripts);
    
    $total_records = mysqli_num_rows($query);
?>

<!--Nav Button  -->                                            
<nav>                                                                     
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
<<<<<<< HEAD
        <a class="nav-item nav-link active" id="nav-home-tab" href="index.php?action=category&category_id=0&current_page=1&searching=" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
        <?php
            for ($i = 0; $i < $total_records; $i++) {
                $tbl_row = mysqli_fetch_array($query);
                echo '<a class="nav-item nav-link" id="nav-profile-tab" href="index.php?action=category&category_id=' . $tbl_row['id_danhMuc'] . '&current_page=1&searching=" role="tab" aria-controls="nav-profile" aria-selected="false">' . $tbl_row['tenDanhMuc'] . '</a>';
            }
        ?>
=======
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
        <?php       
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
        <!-- <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a> -->
    </div>
>>>>>>> 00859cf86c6461ee2475a4052d34d0be933c1f68
</nav>
<!--End Nav Button  -->