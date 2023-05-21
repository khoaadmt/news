<?php
    session_start();
    include_once('function.php');
    $user = new XuLy();

    $action = isset($_GET['action']) ? $_GET('action') : '';

    switch($action):
        case 'comment':
            if(isset($_POST['submit'])):
                $content = $_POST['comment'];
                $newsId = $_GET['id'];
                $date = $_POST['date'];
                if(isset($_SESSION['user']))
                {
                    $user-> comment($content,$newsId,$_SESSION['user'],$date);
                    header('location: detail.php?id='.$newsId.'');
                }
                elseif (isset($_SESSION['admin']))
                {
                    $user-> comment($content,$newsId,$_SESSION['admin'],$date);
                    header('location: detail.php?id='.$newsId.'');
                }
                else
                {
                    $_SESSION['error'] = 'Đăng nhập để bình luận';
                    header('location: detail.php?id='.$newsId.'');
                }
            endif;
        case 'delete':
            $id = isset($_GET['idDel']) ? $_GET['idDel'] : '';
            user-> deleteComment($id);
            header('location: detail.php?id='.$_GET['idNews'].'');
        endswitch;
?>
