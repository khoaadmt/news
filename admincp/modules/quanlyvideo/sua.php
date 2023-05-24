<?php
    $sql_query = "SELECT * FROM tbl_video WHERE id_video=$_GET[id_video] LIMIT 1 ";
    $query_sua_video =  mysqli_query($mysqli,$sql_query);
?> 
<p>Sửa danh mục bài viết</p>
<form action="modules/quanlyvideo/xuly.php?id_video=<?php echo $_GET['id_video']?>" method="POST">
    <table border="1px">
        <?php
            while($row = mysqli_fetch_array($query_sua_video)){
       ?>
    <tr>
        <td>Tiêu đề video</td>
        <td>
            <textarea name="tieuDeVideo"  rows="5"><?php echo $row['tieuDeVideo']?></textarea>
        </td>
    </tr>
    <tr>
        <td>Danh mục</td>
        <td><input type="text" name="danhMuc" value="<?php echo $row['danhMuc']?>"></td>
    </tr>
    <tr>
        <td>Nội dung tóm tắt</td>
        <td>
            <textarea rows="5" name="noiDungTomTat"> <?php echo $row['noiDungTomTat'];?> </textarea>
        </td>
    </tr>
    <tr>
        <td>Link</td>
        <td><input type="text" name="link" value="<?php echo $row['link']?>"></td>
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