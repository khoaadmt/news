<?php
    $sql_query = "SELECT * FROM tbl_danhmuc ORDER BY thuTu";
    $query_lietke_danhmuc =  mysqli_query($mysqli,$sql_query);
?>

<p>Thêm danh mục bài viết</p>
<form action="modules/quanlybaiviet/xuly.php?&query=them" method="POST" enctype="multipart/form-data">
    <table border="1px">
    <tr>
        <td>Tiêu đề bài viết</td>
        <td><input type="text" name="tieuDeBaiViet"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhAnh"></td>
    </tr>
    <tr>
        <td>Tóm tắt</td>
        <td>
            <textarea rows="5" name="tomTat"></textarea>
        </td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td>
            <textarea rows="7" name="noiDung"></textarea>
        </td>
    </tr>
    <tr>
        <td>Thuộc thể loại</td>
        <td>
        <select name="danhMuc">
                
                <?php
            while($row = mysqli_fetch_array($query_lietke_danhmuc)){      
                          
                    ?>
                    <option value="<?php echo $row['tenDanhMuc']?>"><?php echo $row['tenDanhMuc']?></option>
                <?php 
                     }
                ?>
        </select>
        </td>
    </tr>
    <tr>
        <td>Tác giả</td>
        <td><input type="text" name="tacGia"></td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="themBaiViet" value="Thêm bài viết">
        </td>
    </tr>
    </table>
</form>

