<?php

    if(isset($_GET['idbaiviet'])){
        $id_baiviet = $_GET['idbaiviet'];
    }

    if (isset($_POST['submit'])) {
        $idKhachHang = intval($_POST['idKhachHang']);
        $idBaiViet = intval($_POST['idBaiViet']);

        if ($idKhachHang == 0) {
            echo "<script type='text/javascript'>alert('Bạn cần đăng nhập để thực hiện chức năng này');</script>";
            exit();
        }

        $scripts_find_existed_like = "SELECT * FROM tbl_baiviet WHERE id_baiViet = " . $idBaiViet . " AND id_account = " . $idKhachHang;
        $query_get_total_comment = mysqli_query($mysqli, $scripts_find_existed_like);
        $total_results = mysqli_num_rows($query_get_total_comment);

        if($total_results == 1) {
            $script_unlike = "DELETE FROM tbl_baivietyeuthich WHERE id_baiViet = " . $idBaiViet . " AND id_account = " . $idKhachHang;
            $query_unlike = mysqli_query($mysqli, $script_unlike);
        } else {
            $script_like = "INSERT INTO tbl_baivietyeuthich(id_account, id_baiviet) VALUES(" . $idKhachHang . ", ". $idBaiViet.")";
            $query_like = mysqli_query($mysqli, $script_like);
        }
    }
?>