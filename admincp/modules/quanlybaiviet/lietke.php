<?php
        $sql_query = "SELECT * FROM tbl_baiviet ORDER BY id_BaiViet";
        $query_lietke_baiviet =  mysqli_query($mysqli,$sql_query);
?>
<p>liệt kê danh mục sản phẩm</p>
<table border="1px">
    <tr>
        <th>ID</th>
        <th>Tiêu đề bài viết</th>
        <th>Hình ảnh</th>
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

            while($row = mysqli_fetch_array($query_lietke_baiviet)){
                 $i++;
            ?>
            <tr>
                <td><?php echo$row['id_baiViet'] ?></td>
                <td><?php echo$row['tieuDeBaiViet'] ?></td>
                <td><img src="modules/quanlybaiviet/uploads/<?php echo$row['hinhAnh']?>" width="100px">  </td>
                <td><?php echo$row['video'] ?></td>
                <td><?php echo$row['tomTat'] ?></td>
                <td><?php echo$row['noiDung'] ?></td>
                <td><?php echo$row['id_danhmuc'] ?></td>
                <td><?php echo$name?></td>
                <td><?php echo$row['ngayTao'] ?></td>
                <td>
                <a href="?action=quanLyBaiViet&query=sua&id_baiViet=<?php echo $row['id_baiViet']?>">Sửa</a> 
                <a href="modules/quanlybaiviet/xuly.php?id_baiViet=<?php echo $row['id_baiViet']?>">Xóa</a> 
                </td>
            </tr>
        <?php
         }
        ?>
    </tr>
</table>