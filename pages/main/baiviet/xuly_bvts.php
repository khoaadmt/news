
                            <form method="post" action="./xuly_bvts.php" enctype="multipart/form-data" id="post-form" >
                                <table border="1px">
                                    <tr>
                                        <td>Tiêu đề bài viết</td>
                                        <td><input type="text" name="tieuDeBaiViet"></td>
                                    </tr>
                                    <tr>
                                        <td>Hình ảnh</td>
                                        <td><input type="file" name="hinhAnh"></td>
                                    </tr>
                                    <tr>
                                        <td>Link video</td>
                                        <td> <textarea rows="5" name="linkVideo"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Tóm tắt</td>
                                        <td>
                                            <textarea rows="5" name="tomTat"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nội dung</td>
                                        <td>
                                            <textarea rows="7" name="noiDung"></textarea>
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
                                            <input type="submit" name="themBaiViet" value="Thêm bài viết">
                                        </td>
                                        <td>
                                        <button type="button" onclick="hidePostForm()">Hủy</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
