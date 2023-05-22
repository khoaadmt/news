<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tmp = $_GET['action'];
            $query = $_GET['query'];
        } 
        else{
            $tmp = '';
            $query = '';
        }  
        if($tmp == 'quanLyDanhMucBaiViet' && $query == 'them'){
            include('quanlydanhmucbv/them.php');
            include('quanlydanhmucbv/lietke.php');
        }
        elseif($tmp == 'quanLyDanhMucBaiViet' && $query == 'sua'){
            include('quanlybaiviet/sua.php');
        }
        if($tmp == 'quanLyBaiViet' && $query == 'them'){
            include('quanlybaiviet/them.php');
            include('quanlybaiviet/lietke.php');
        }
        elseif($tmp == 'quanLyBaiViet' && $query == 'sua'){
            include('quanlybaiviet/sua.php');
        }
        if($tmp == 'quanLyVideo' && $query == 'them'){
            include('quanlyvideo/them.php');
            include('quanlyvideo/lietke.php');
        }
        elseif($tmp == 'quanLyVideo' && $query == 'sua'){
            include('quanlyvideo/sua.php');
        }
        elseif($tmp == 'quanLyTaiKhoan' && $query == 'lietke'){
            include('quanLyTaiKhoan/lietke.php');
        }
        else{
            echo 'Dasboard';
        }
           
    ?>
</div>