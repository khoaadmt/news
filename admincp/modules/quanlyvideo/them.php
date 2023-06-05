<?php
    $sql_query = "SELECT * FROM tbl_danhmuc ORDER BY thuTu";
    $query_lietke_danhmuc =  mysqli_query($mysqli,$sql_query);
?>

<p>Thêm Video</p>
<form action="modules/quanlyvideo/xuly.php?&query=them" method="POST" enctype="multipart/form-data">
    <table border="1px">
    <tr>
        <td>Tiêu đề video</td>
        <td><input type="text" name="tieuDeVideo"></td>
    </tr>
    <tr>
        <td>Link video</td>
        <td> <textarea rows="5" name="linkVideo"></textarea></td>
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
                    <option value="<?php echo $row['id_danhMuc']?>"><?php echo $row['tenDanhMuc']?></option>
                <?php 
                     }
                ?>
        </select>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="themVideo" value="Thêm Video">
        </td>
    </tr>
    </table>
</form>

