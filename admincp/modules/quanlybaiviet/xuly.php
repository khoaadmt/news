<?php
include('../../config/config.php');
        $tieuDeBaiViet = $_POST['tieuDeBaiViet'];
        $tomTat = $_POST['tomTat'];
        $noiDung = $_POST['noiDung'];
        $tacGia = $_POST['tacGia'];
        $danhMuc = $_POST['danhMuc'];

        $hinhAnh = $_FILES['hinhAnh']['name'];
        $hinhAnh_tmp = $_FILES['hinhAnh']['tmp_name'];
        $hinhAnh = time().'_'.$hinhAnh;

    if(isset($_POST['themBaiViet'])){
        $tieuDeBaiViet = mysqli_real_escape_string($mysqli, $tieuDeBaiViet);
        $hinhAnh = mysqli_real_escape_string($mysqli, $hinhAnh);
        $tomTat = mysqli_real_escape_string($mysqli, $tomTat);
        $noiDung = mysqli_real_escape_string($mysqli, $noiDung);
        $tacGia = mysqli_real_escape_string($mysqli, $tacGia);
        $danhMuc = mysqli_real_escape_string($mysqli, $danhMuc);

        $sql_query = "INSERT INTO tbl_baiviet(tieuDeBaiViet,hinhAnh,tomTat,noiDung,danhMuc,tacGia,ngayTao) 
        VALUE('".$tieuDeBaiViet."','".$hinhAnh."','".$tomTat."','".$noiDung."','".$danhMuc."','".$tacGia."',CURRENT_DATE())";
        mysqli_query($mysqli,$sql_query);
        move_uploaded_file($hinhAnh_tmp,'uploads/'.$hinhAnh);
        header('location:../../index.php?%20action=quanLyBaiViet&query=them');
    }
    elseif(isset($_POST['suaBaiViet'])){
        if(isset($_POST['hinhAnh'])){
            $sql_query = "UPDATE tbl_baiViet SET tieuDeBaiViet = '".$tieuDeBaiViet."',hinhAnh = '".$hinhAnh."',
            tomTat= '".$tomTat."',noiDung = '".$noiDung."',danhMuc ='".$danhMuc."',
            tacGia ='".$tacGia."'
            WHERE id_baiViet = '$_GET[id_danhMuc]' ";
        }else{
            $sql_query = "UPDATE tbl_baiViet SET tieuDeBaiViet = '".$tieuDeBaiViet."',
            tomTat= '".$tomTat."',noiDung = '".$noiDung."',danhMuc ='".$danhMuc."',
            tacGia ='".$tacGia."'
            WHERE id_baiViet = '$_GET[id_baiViet]' ";
        }
      
        mysqli_query($mysqli,$sql_query);
        header('location:../../index.php?%20action=quanLyBaiViet&query=them');
    }
    else{
        $id = $_GET['id_baiViet'];
        $sql = "SELECT * FROM tbl_baiviet WHERE id_baiViet = '$id' LIMIT 1 ";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhAnh']);
        }

        $sql_xoa = " DELETE FROM tbl_baiViet WHERE id_baiViet = '".$id."'  ";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../index.php?%20action=quanLyBaiViet&query=them');
    }
?>