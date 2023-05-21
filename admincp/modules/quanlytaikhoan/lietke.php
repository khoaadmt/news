<?php
    $sql_query = "SELECT * FROM tbl_admin";
    $query_lietke_taikhoan =  mysqli_query($mysqli,$sql_query);
?>
<p>liệt kê tài khoản</p>
<table border="1px">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
    <tr>
        <?php
            $i =0;
            while($row = mysqli_fetch_array($query_lietke_taikhoan)){
                 $i++;
            ?>
            <tr>
                <td><?php echo$row['id_admin'] ?></td>
                <td><?php echo$row['username'] ?></td>
                <td><?php echo$row['password'] ?></td>
            </tr>
        <?php
         }
        ?>
    </tr>
</table>