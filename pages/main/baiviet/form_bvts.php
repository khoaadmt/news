<body>
<style>
    form{
        background-color: white;
        border-radius: 5px;
        width: 500px;
        height: 500px;
        display: flex;
        justify-content: center;
  align-items: center;
    }
    table{
        border-collapse: collapse;
        border-radius: 5px;
        box-sizing: border-box;
        border: none;
        width: 95%;
        height: 95%;
        margin: auto;
    }
    body {
  background-image: url("./admincp/modules/quanlybaiviet/uploads/Screenshot\ 2023-06-05\ 110442.png"); /* Đường dẫn đến hình ảnh background */
  background-repeat: no-repeat;
  background-size: cover; /* Điều chỉnh kích thước để vừa với trình duyệt */
  object-fit: cover;
  position: relative;
  margin: 0;
  padding: 0;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

body::before {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #000; /* Màu background mờ */
  opacity: 0.6; /* Độ mờ của background */
  top: 0;
  left: 0;
  z-index: -1; /* Dấu chìm phía sau để không che lấp trang web */
}
    td{
        text-align: center;
        border: 2px solid #CDC0B0;
    }
    input, textarea, select{
        width: 100%;
    }
    button{
        width: 80px;
        background-color: #FF9966;
        border-radius: 5px;
        border-color: #FFCC99;
        cursor: pointer;
        transition: 0.3s ease;
    }
    button:hover{
        background-color: rgb(241,76,56);
        transition: 0.3s ease;
    }
    .them:hover{
        background-color:rgb(241,76,56);
        transition: 0.3s ease;
        border-radius: 5px;
        border-color: 	#FFFF99;
        cursor: pointer;
    }

</style>
<div class="background">
  <div class="overlay"></div>
  <div class="form-wrapper">
  <form method="post" action="./xuly_bvts.php" enctype="multipart/form-data" id="post-form" >
                                <table border="1px">
                                    <tr>
                                        <td>Tiêu đề bài viết</td>
                                        <td><input type="text" name="tieuDeBaiViet" placeholder="tiêu đề"></td>
                                    </tr>
                                    <tr>
                                        <td>Hình ảnh</td>
                                        <td><input type="file" name="hinhAnh" ></td>
                                    </tr>
                                    <tr>
                                        <td>Link video</td>
                                        <td> <textarea rows="5" name="linkVideo" placeholder="Nhập link video"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Tóm tắt</td>
                                        <td>
                                            <textarea rows="5" name="tomTat" placeholder="Nội dung tóm tắt"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nội dung</td>
                                        <td>
                                            <textarea rows="7" name="noiDung" placeholder="Nội dung chính"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thuộc thể loại</td>
                                        <td>
                                        <select name="danhMuc">
                                            <option value="1">Bài hát</option>
                                            <option value="2">Bài hát yêu thích</option>
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="them" type="submit" name="themBaiViet" value="Thêm bài viết">
                                        </td>
                                        <td>
                                        <button type="button" onclick="hidePostForm()">Hủy</button>
                                        </td>
                                    </tr>
                                </table>
    </form>

  </div>
</div>
</body>
<script>
    function hidePostForm() {
  window.location.href = "index.php";
}
</script>
