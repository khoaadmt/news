<?php
    $sql_query = "SELECT * FROM tbl_video ORDER BY id_video";
    $query_lietke_video =  mysqli_query($mysqli,$sql_query);
?>
<p>liệt kê video</p>
<table border="1px">
    <tr>
        <th>Tiêu đề bài viết</th>
        <th>Danh mục</th>
        <th>Nội dung tóm tắt</th>
        <th>Link</th>
        <th>Quản lý</th>
    </tr>
    <tr>
        <?php
            $i =0;
            while($row = mysqli_fetch_array($query_lietke_video)){
                 $i++;
            ?>
            <tr>
                <td><?php echo$row['tieuDeVideo'] ?></td>
                <td><?php echo$row['danhMuc'] ?></td>
                <td><textarea rows="5"><?php echo $row['noiDungTomTat']?></textarea></td>
                <td><?php echo$row['link'] ?></td>
                <td>
                <a href="?action=quanLyVideo&query=sua&id_video=<?php echo $row['id_video']?>">Sửa</a> 
                <a href="modules/quanlyvideo/xuly.php?id_video=<?php echo $row['id_video']?>">Xóa</a> 
                </td>
            </tr>
        <?php
         }
        ?>
    </tr>
</table>