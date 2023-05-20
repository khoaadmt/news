<?php
    $sql_query = "SELECT * FROM tbl_danhmuc ORDER BY thuTu";
    $query_lietke_danhmuc =  mysqli_query($mysqli,$sql_query);
?>
<p>liệt kê danh mục sản phẩm</p>
<table border="1px">
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>
    <tr>
        <?php
            $i =0;
            while($row = mysqli_fetch_array($query_lietke_danhmuc)){
                 $i++;
            ?>
            <tr>
                <td><?php echo$row['id_danhMuc'] ?></td>
                <td><?php echo$row['tenDanhMuc'] ?></td>
                <td>
                <a href="?action=quanLyDanhMucBaiViet&query=sua&id_danhMuc=<?php echo $row['id_danhMuc']?>">Sửa</a> 
                <a href="modules/quanlydanhmucbv/xuly.php?id_danhMuc=<?php echo $row['id_danhMuc']?>">Xóa</a> 
                </td>
            </tr>
        <?php
         }
        ?>
    </tr>
</table>