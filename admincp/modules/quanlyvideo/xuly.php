<?php
include('../../config/config.php');
        $tieuDeVideo = $_POST['tieuDeVideo'];
        $danhMuc = $_POST['danhMuc'];
        $link = $_POST['link'];
        $noiDungTomTat = $_POST['noiDungTomTat'];
    if(isset($_POST['themVideo'])){
        $sql_query = "INSERT INTO tbl_Video(tieuDeVideo,danhMuc,link,noiDungTomTat) 
        VALUE('".$tieuDeVideo."','".$danhMuc."','".$link."','".$noiDungTomTat."')";
        mysqli_query($mysqli,$sql_query);
        header('location:../../index.php?%20action=quanLyVideo&query=them');
    }
    elseif(isset($_POST['suaVideo'])){
        $sql_query = "UPDATE tbl_danhmuc SET tenDanhMuc = '".$tenDanhMuc."',thuTu= '".$thuTu."'
                                         WHERE id_danhMuc = '$_GET[id_danhMuc]' ";
        mysqli_query($mysqli,$sql_query);
        header('location:../../index.php?%20action=quanLyVideo&query=them');
    }
    else{
        $id = $_GET['id_video'];
        $sql_xoa = " DELETE FROM tbl_video WHERE id_video = '".$id."'  ";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../index.php?%20action=quanLyVideo&query=them');
    }
?>