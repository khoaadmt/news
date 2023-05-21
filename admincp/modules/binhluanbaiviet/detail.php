<!-- -->
<div class="detail-top" style="margin-top: 30px;">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">
            <?php 
                // show Comment
                $showComment = $user -> getComment($id);
                if( !empty($showComment)):
                    foreach( $showComment as $comm):
            ?>
            <div class="comment-post">
                <div class="user-comment">
                    <img src=" <?= $comm['image'] ?>" alt="">
                    <div class="infor-user">
                        <h4><?= $comm['adminName'] ?></h4>
                        <p><?= $comm['date'] ?></p>
                    </div>
                </div>

                <div class="text-comment">
                    <p><?= $comm['content'] ?></p>
                    <?php 
                    //show profile
                    // Lấy ds user trong mysqli để so sánh với tài khoản đang login trên web
                    $showProfile = $user -> getProfile($comm['adminId']);
                    if( !empty($showProfile)):
                        foreach( $showProfile as $pro):
                            if( isset($_SESSION['user'])){
                                if($_SESSION['user'] == $pro['adminId']):
                    ?>
                            <a style="color: red;"
                            href="handle.php?action=delete&idDel=<?= $comm['id']?>&idNews=<?= $comm['newsId']?>">Xóa</a>
                    <?php endif; ?>

                    <?php } elseif( isset($_SESSION['admin'])) { 
                                    if($_SESSION['admin'] == $pro['adminId']):
                        ?>
                                <a style="color: red;"
                                href="handle.php?action=delete&idDel=<?= $comm['id']?>&idNews=<?= $comm['newsId']?>">Xóa</a>
                        <?php endif; ?>
    
                    ?>

                    <?php } endforeach;endif?>
                </div>


            </div>
        </div>
        <?php endforeach;endif; ?>
    </div>
</div>
<!-- form comment -->
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <?php 
            if( !isset($_SESSION['user']) && !isset($_SESSION['admin']))
                echo isset( $_SESSION['error']) ?  $_SESSION['error'] : '';
        ?>
        <form action="handle.php?action=comment&id=<? $id ?>" method="post">
            <div class="comment">
                <input type="text" name="comment" placeholder="Để lại bình luận tại đây">
                <input type="text" name="date" value="<?php $date = date('Y-m-d'); echo $date;?>" hidden>
                <button name="submit" type="submit">Gửi</button>
            </div>
        </form>

    </div>
</div>