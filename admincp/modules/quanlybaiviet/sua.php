<?php
    $sql_query = "SELECT * FROM tbl_baiviet WHERE id_baiViet = $_GET[id_baiViet] LIMIT 1 ";
    $query_sua_baiviet =  mysqli_query($mysqli,$sql_query);

    $sql_query = "SELECT * FROM tbl_danhmuc ORDER BY thuTu";
    $query_lietke_danhmuc =  mysqli_query($mysqli,$sql_query);
?> 
<p>Sửa danh mục bài viết</p>
<form action="modules/quanlybaiviet/xuly.php?id_baiViet=<?php echo $_GET['id_baiViet']?>" method="POST" enctype="multipart/form-data">
    <table border="1px">
        <?php
        while($row = mysqli_fetch_array($query_sua_baiviet)){
        ?>
    <tr>
        <td>Tiêu đề bài viết</td>
        <td><input type="text" name="tieuDeBaiViet" value="<?php echo $row['tieuDeBaiViet']?>"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td>
            <img src="modules/quanlybaiviet/uploads/<?php echo$row['hinhAnh']?>" width="100px">
            <input type="file" name="hinhAnh">
            <input type="text" name="oldImage" value="<?php echo$row['hinhAnh']?>" style="display: none;">
        </td>
    </tr>
    <tr>
        <td>Link video</td>
        <td>
            <textarea rows="5" name="linkVideo" ><?php echo $row['video']?></textarea>
        </td>
    </tr>
    <tr>
        <td>Tóm tắt</td>
        <td>
            <textarea rows="5" name="tomTat" ><?php echo $row['tomTat']?></textarea>
        </td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td>
            <textarea rows="7" name="noiDung"><?php echo $row['noiDung']?></textarea>
        </td>
    </tr>
    <tr>
        <td>Thuộc thể loại</td>
        <td>
            <select name="danhMuc">
                    <?php
                while($row2 = mysqli_fetch_array($query_lietke_danhmuc)){      
                            
                        ?>
                        <option value="<?php echo $row2['id_danhMuc']?>" <?php if($row2['id_danhMuc'] == $row['id_danhmuc']) echo 'selected'; ?>> <?php echo $row2['tenDanhMuc']?> </option>
                    <?php 
                        }
                    ?>
            </select>
        </td>
       
    </tr>
    <tr>
        <td>
            <input type="submit" name="suaBaiViet" value="Sửa bài viết">
        </td>
    </tr>
    <?php
        }
    ?>
    </table>
</form>

