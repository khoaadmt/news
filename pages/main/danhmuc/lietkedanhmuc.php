<!--Nav Button  -->                                            
<nav>                                                                     
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
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
</nav>
<!--End Nav Button  -->