<?php
include('../../config/config.php');
        $tenDanhMuc = $_POST['tenDanhMuc'];
        $thuTu = $_POST['thuTu'];
    if(isset($_POST['themDanhMuc'])){
        $sql_query = "INSERT INTO tbl_danhmuc(tenDanhMuc,thuTu) VALUE('".$tenDanhMuc."','".$thuTu."')";
        mysqli_query($mysqli,$sql_query);
        header('location:../../index.php?%20action=quanLyDanhMucBaiViet&query=them');
    }
    elseif(isset($_POST['suaDanhMuc'])){
        $sql_query = "UPDATE tbl_danhmuc SET tenDanhMuc = '".$tenDanhMuc."',thuTu= '".$thuTu."'
                                         WHERE id_danhMuc = '$_GET[id_danhMuc]' ";
        mysqli_query($mysqli,$sql_query);
        header('location:../../index.php?%20action=quanLyDanhMucBaiViet&query=them');
    }
    else{
        $id = $_GET['id_danhMuc'];
        $sql_xoa = " DELETE FROM tbl_danhmuc WHERE id_danhMuc = '".$id."'  ";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../index.php?%20action=quanLyDanhMucBaiViet&query=them');
    }
?>