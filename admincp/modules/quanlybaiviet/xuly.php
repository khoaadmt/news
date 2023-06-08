<?php
include('../../config/config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "C:\\xampp\\htdocs\\news\\vendor\\autoload.php";
    
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

      //  gửi mail cho các gmail đăng ký
        $sql = "SELECT * FROM tbl_lienhe";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            $mail = new PHPMailer(true);

            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'khoaadmt@gmail.com';                     //SMTP username
            $mail->Password   = 'pvnyewnccqyqdvkw';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('khoaadmt@gmail.com', 'AZ NEWS');
            $mail->addAddress($row['gmail'], 'test');     //Add a recipient
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    =  'Message: ' .'Đã có bài viết mới'. '<br>' .
                            'Name: ' . $tieuDeBaiViet . '<br>' .
                            'Email: ' . $tomTat. '<br>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            };

        header('location:../../index.php?%20action=quanLyBaiViet&query=them');
    }
    elseif(isset($_POST['suaBaiViet'])){
        if($hinhAnh != ''){
            $oldImagePath = 'uploads/'.$_POST['oldImage'];
            // echo $_POST['oldImage']. '<br>';
            // echo  '<img src="'.$oldImagePath.'" width="100px">';
            if (file_exists($oldImagePath)) {
                $deleted = unlink($oldImagePath);
                if ($deleted) {
                    echo 'Xóa tệp tin thành công.';
                } else {
                    echo 'Không thể xóa tệp tin.';
                }
            } else {
                echo 'Tệp tin không tồn tại.';
            }            
          
            $sql_query = "UPDATE tbl_baiViet SET 
            tieuDeBaiViet = '".$tieuDeBaiViet."',hinhAnh = '".$hinhAnh."',
            video = '".$link."',tomTat= '".$tomTat."',noiDung = '".$noiDung."',
            id_danhmuc ='".$danhMuc."',nguoiTao ='1'
            WHERE id_baiViet = '$_GET[id_baiViet]' ";
            move_uploaded_file($hinhAnh_tmp,'uploads/'.$hinhAnh);
        }else{
            echo "Isset = false";
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