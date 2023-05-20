<?php
    $sql_query = "SELECT * FROM tbl_danhmuc WHERE id_danhMuc=$_GET[id_danhMuc] LIMIT 1 ";
    $query_sua_danhmuc =  mysqli_query($mysqli,$sql_query);
?> 
<p>Sửa danh mục bài viết</p>
<form action="modules/quanlydanhmucbv/xuly.php?id_danhMuc=<?php echo $_GET['id_danhMuc']?>" method="POST">
    <table border="1px">
        <?php
            while($row = mysqli_fetch_array($query_sua_danhmuc)){
       ?>
    <tr>
        <td>Tên danh mục</td>
        <td><input type="text" name="tenDanhMuc" value="<?php echo $row['tenDanhMuc']?>"></td>
    </tr>
    <tr>
        <td>Thứ tự</td>
        <td><input type="text" name="thuTu" value="<?php echo $row['thuTu']?>"></td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="suaDanhMuc" value="Sửa danh mục">
        </td>
    </tr>
    <?php
            }
    ?>
    </table>
</form>