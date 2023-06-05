<?php
    $sql_query = "SELECT * FROM tbl_video WHERE id_video = $_GET[id_video] LIMIT 1 ";
    $query_sua_video =  mysqli_query($mysqli,$sql_query);

    $sql_query = "SELECT * FROM tbl_danhmuc ORDER BY thuTu";
    $query_lietke_danhmuc =  mysqli_query($mysqli,$sql_query);
?> 
<p>Sửa danh mục video</p>
<form action="modules/quanlyvideo/xuly.php?id_video=<?php echo $_GET['id_video']?>" method="POST" enctype="multipart/form-data">
    <table border="1px">
        <?php
        while($row = mysqli_fetch_array($query_sua_video)){
        ?>
    <tr>
        <td>Tiêu đề Video</td>
        <td><input type="text" name="tieuDeVideo" value="<?php echo $row['tieuDeVideo']?>"></td>
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
            <input type="submit" name="suaVideo" value="Sửa Video">
        </td>
    </tr>
    <?php
        }
    ?>
    </table>
</form>

