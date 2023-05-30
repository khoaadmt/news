<?php
include('../../config/config.php');
        $tieuDeBaiViet = $_POST['tieuDeBaiViet'];
        $tomTat = $_POST['tomTat'];
        $noiDung = $_POST['noiDung'];
        $danhMuc = $_POST['danhMuc'];
        $link  = $_POST['linkVideo'];

        $hinhAnh = $_FILES['hinhAnh']['name'];
        $hinhAnh_tmp = $_FILES['hinhAnh']['tmp_name'];
        if($hinhAnh != ''){
            $hinhAnh = time().'_'.$hinhAnh;
        }

    if(isset($_POST['themBaiViet'])){
        $tieuDeBaiViet = mysqli_real_escape_string($mysqli, $tieuDeBaiViet);
        $hinhAnh = mysqli_real_escape_string($mysqli, $hinhAnh);
        $tomTat = mysqli_real_escape_string($mysqli, $tomTat);
        $noiDung = mysqli_real_escape_string($mysqli, $noiDung);
        $tacGia = mysqli_real_escape_string($mysqli, $tacGia);
        $danhMuc = mysqli_real_escape_string($mysqli, $danhMuc);

        $sql_query = "INSERT INTO tbl_baiviet(tieuDeBaiViet,hinhAnh,video,tomTat,noiDung,id_danhMuc,nguoiTao,ngayTao) 
        VALUE('".$tieuDeBaiViet."','".$hinhAnh."','".$link."','".$tomTat."','".$noiDung."','".$danhMuc."','1',CURRENT_DATE())";
        mysqli_query($mysqli,$sql_query);
        move_uploaded_file($hinhAnh_tmp,'uploads/'.$hinhAnh);
        header('location:../../index.php?%20action=quanLyBaiViet&query=them');
    }
    elseif(isset($_POST['suaBaiViet'])){
        if(isset($_POST['hinhAnh'])){
            $sql_query = "UPDATE tbl_baiViet SET tieuDeBaiViet = '".$tieuDeBaiViet."',hinhAnh = '".$hinhAnh."',
            video = '".$link."',
            tomTat= '".$tomTat."',noiDung = '".$noiDung."',id_danhmuc ='".$danhMuc."',
            tacGia ='1'
            WHERE id_baiViet = '$_GET[id_baiViet]' ";
        }else{
            $sql_query = "UPDATE tbl_baiViet SET tieuDeBaiViet = '".$tieuDeBaiViet."',
            video = '".$link."',
            tomTat= '".$tomTat."',noiDung = '".$noiDung."',id_danhmuc ='".$danhMuc."',
            nguoiTao ='1'
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