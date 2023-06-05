<?php
include('../../config/config.php');
        $tieuDeVideo = $_POST['tieuDeVideo'];
        $tomTat = $_POST['tomTat'];
        $noiDung = $_POST['noiDung'];
        $danhMuc = $_POST['danhMuc'];
        $link  = $_POST['linkVideo'];


    if(isset($_POST['themVideo'])){
        $tieuDevideo = mysqli_real_escape_string($mysqli, $tieuDeVideo);
        $tomTat = mysqli_real_escape_string($mysqli, $tomTat);
        $noiDung = mysqli_real_escape_string($mysqli, $noiDung);
        $tacGia = mysqli_real_escape_string($mysqli, $tacGia);
        $danhMuc = mysqli_real_escape_string($mysqli, $danhMuc);

        $sql_query = "INSERT INTO tbl_video(tieuDeVideo,video,tomTat,noiDung,id_danhMuc,nguoiTao,ngayTao) 
        VALUE('".$tieuDeVideo."','".$link."','".$tomTat."','".$noiDung."','".$danhMuc."','1',CURRENT_DATE())";
        mysqli_query($mysqli,$sql_query);
        header('location:../../index.php?%20action=quanLyVideo&query=them');
    }
    elseif(isset($_POST['suaVideo'])){
        if(isset($_POST['linkVideo'])){
            $sql_query = "UPDATE tbl_video SET tieuDeVideo = '".$tieuDeVideo."',
            video = '".$link."',
            tomTat= '".$tomTat."',noiDung = '".$noiDung."',id_danhmuc ='".$danhMuc."',
            tacGia ='1'
            WHERE id_video = '$_GET[id_video]' ";
        }else{
            $sql_query = "UPDATE tbl_video SET tieuDeVideo = '".$tieuDeVideo."',
            video = '".$link."',
            tomTat= '".$tomTat."',noiDung = '".$noiDung."',id_danhmuc ='".$danhMuc."',
            nguoiTao ='1'
            WHERE id_video = '$_GET[id_video]' ";
        }
      
        mysqli_query($mysqli,$sql_query);
        header('location:../../index.php?%20action=quanLyVideo&query=them');
    }
    else{
        $id = $_GET['id_video'];
        $sql = "SELECT * FROM tbl_video WHERE id_video = '$id' LIMIT 1 ";
        $query = mysqli_query($mysqli,$sql);

        $sql_xoa = " DELETE FROM tbl_video WHERE id_video = '".$id."'  ";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../index.php?%20action=quanLyVideo&query=them');
    }
?>