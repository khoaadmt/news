<?php
      include_once('config/config.php');
?>
<?php
    class XuLy extends database
    {
        // Lấy Profile
        public function getProfile()
        {
            $data = null;
            $sql = "SELECT INTO * FROM tbl_users WHERE adminId = '$id'";
            $result = $this->connection->query($sql) ;

            if($result)
            {
                while($row = $result-> fetch_assoc())
                {
                    $data[] = $row;
                }
                return $data;
            }
        }
        // insert comment
        public function comment($content, $newsId, $userId,$date)
        {
            $sql = "INSERT INTO tbl_comment(content,newsId,adminId,date)
            VALUES ('$content','$newsId','$userId','$date')";

            $result = $this->connection->query($sql) ;

        }
        // Lấy comment
        public function getComment($id)
        {
            $data = null;
            $sql = "SELECT INTO * FROM tbl_comment 
            JOIN tbl_news ON tbl_comment.newsId = tbl_news.newsId
            JOIN tbl_users ON tbl_comment.adminId = tbl_users.adminId
            WHERE tbl_news.newsId ='$id' ";
            $result = $this->connection->query($sql) ;

            if($result-> num_rows > 0)
            {
                while($row = $result-> fetch_assoc())
                {
                    $data[] = $row;
                }
                return $data;
            }
        }
        //Xóa comment
        public function deleteComment()
        {
            $sql = "DELETE FROM tbl_comment WHERE id ='$id'";
            $result = $this->connection->query($sql);
            if($result)
                return true;
            else
                return false;
        }
    }

?>