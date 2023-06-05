<?php 



    include './admincp/config/config.php';
    if(isset($_POST['themBaiViet'])){
        echo "ddax baasm";
        print_r($_POST);
        $tieuDeBaiViet = $_POST['tieuDeBaiViet'];
        $hinhAnh = $_FILES['hinhAnh']['name'];
        $linkVideo = $_POST['linkVideo'];
        $tomTat = $_POST['tomTat'];
        $noiDung = $_POST['noiDung'];
        $danhMucId = $_POST['danhMuc'];
        $sql = "INSERT INTO tbl_baivietts (tieuDeBaiViet,hinhAnh,linkVideo,tomTat,noiDung,danhMuc)  VALUES ('$tieuDeBaiViet', '$hinhAnh', '$linkVideo', '$tomTat', '$noiDung', '$danhMucId')";
        if($mysqli->query($sql)===TRUE){
            echo "theem thanfh coong";
        }
        else{
            echo "loi {$sql}".$mysqli->error;
        }
        header('location:../index.php');
    }
?>
