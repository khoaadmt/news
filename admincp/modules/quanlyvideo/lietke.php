<?php
        $sql_query = "SELECT * FROM tbl_video ORDER BY id_video";
        $query_lietke_video =  mysqli_query($mysqli,$sql_query);
?>
<p>liệt kê danh mục video</p>
<table border="1px">
    <tr>
        <th>ID</th>
        <th>Tiêu đề video</th>
        <th>Link video</th>
        <th>Tóm tắt</th>
        <th>Nội dung</th>
        <th>Danh mục</th>
        <th>Tác giả</th>
        <th>Ngày tạo</th>
        <th>Quản lý</th>
    </tr>
    <tr>
        <?php
            $i =0;
            $sql_query = "SELECT * FROM tbl_admin
                          WHERE id_admin = '1' ";
            $result =  mysqli_query($mysqli,$sql_query);

            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $name = $row['username'];
            }

            while($row = mysqli_fetch_array($query_lietke_video)){
                 $i++;
            ?>
            <tr>
                <td><?php echo$row['id_video'] ?></td>
                <td><?php echo$row['tieuDeVideo'] ?></td>
                <td><?php echo$row['video'] ?></td>
                <td><?php echo$row['tomTat'] ?></td>
                <td><?php echo$row['noiDung'] ?></td>
                <td><?php echo$row['id_danhmuc'] ?></td>
                <td><?php echo$name?></td>
                <td><?php echo$row['ngayTao'] ?></td>
                <td>
                <a href="?action=quanLyvideo&query=sua&id_video=<?php echo $row['id_video']?>">Sửa</a> 
                <a href="modules/quanlyvideo/xuly.php?id_video=<?php echo $row['id_video']?>">Xóa</a> 
                </td>
            </tr>
        <?php
         }
        ?>
    </tr>
</table>