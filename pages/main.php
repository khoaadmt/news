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
    }
?>