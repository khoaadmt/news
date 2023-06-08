<?php 
    if(isset($_GET['action'])){
        $bientam = $_GET['action'];

    }else{
        $bientam = "home";
    }

    if ($bientam == 'home'){
        include("main/trangchu/main.php");
    } else if ($bientam == 'category') {
        include("main/danhmuc/main.php");
    }
    else if ($bientam == 'contact') {
        include("main/lienhe/main.php");
    } else if ($bientam == "post") {
        include("main/baiviet/baiviettheoId.php");
    }
    else if ($bientam == "baiviettamsu") {
        // include form các bài viết tâm sự ở đây
        include("main/baiviet/baiviettamsu.php");
    }
    else if ($bientam == "dangbai") {
         // include form đăng bài ở đây
        include("main/Dangbai/form_dangbai.php");
    }
?>