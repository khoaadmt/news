<?php 
    include './admincp/config/config.php';
    $query = mysqli_query($mysqli, "SELECT * FROM tbl_baiviet ORDER BY ngayTao DESC LIMIT 6");
if (!$query) {
    printf("Error: %s\n", mysqli_error($mysqli));
    exit();
}
?>

<div class="youtube-area video-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="video-items-active">
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    echo '<div class="video-items text-center">';
                    echo '<iframe src="' . $row['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        </div>
        <div class="video-info">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-caption">
                        <div class="top-caption">
                            <span class="color1">Politics</span>
                        </div>
                        <div class="bottom-caption">
                            <h2>Welcome To The Best Model Winner Contest At Look of the year</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testmonial-nav text-center">
                        <?php
                            $sql = "SELECT id_baiViet, tieuDeBaiViet, video FROM tbl_baiviet ORDER BY ngayTao ASC LIMIT 6";
                            $result = mysqli_query($mysqli, $sql);
                        
                            // nếu có video thì hiển thị chúng trên trang
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo '<div class="single-video">';
                                    echo '<iframe src="'.$row['video'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                    echo '<div class="video-intro">';
                                    echo '<h4>'.$row['tieuDeBaiViet'].'</h4>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo "No videos found.";
                            }
                        
                            // đóng kết nối
                            mysqli_close($mysqli);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
