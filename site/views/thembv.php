
    <main>
        <div class="boxcenter">
            <div class="boxnewblog">
                <div class="navmain">
                    <nav>
                        <ol data-v-53d0ffbc="" class="breadcrumb">
                            <h2>Đăng cảm nhận</h2>
                            <!-- <li class="active breadcrumb-item">Trang chủ</li>
                            <li class="breadcrumb-item">Buffet Nướng</li> -->
                        </ol>
                    </nav>
                </div>
                <form action="index.php?act=thembv_"  method="post" id="formnewblog" name="formnewblog"  enctype="multipart/form-data">
                <div class="boxform">
                    <div class="tieude tieudeafter">Tiêu Đề</div>
                    <div class="boxinput">
                        <input type="text" id="tieude" name="tieude" placeholder="Hãy viết tiêu đề bài">
                    </div>
                </div>
                <div class="boxform">
                    <textarea class="noidung" name="noidung" value="" id="noidung" cols="30" rows="10" placeholder="Hãy viết cảm nhận của bạn"></textarea>
                   
                </div>
                <div class="boxform">
                    <div class="tieude tieudeafter">Tag</div>
                    <div class="boxinput" id="boxinpt-tag">
                        <input autocomplete="off" type="text" placeholder="Tìm kiếm hay thêm tag" name="tag" id="tag">
                        <div class="box-suggest">
                            <ul id="box-suggest">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="boxform boxshowimg hidden">
                    <div class="ouputimg">
                        <br>
                        <div class="output-fet"><output id="list"></output></div>
                        <a href="#" id="clear">Xoá</a>
                    </div>
                   
                </div>
                
                <div class="boxform">
                    <div class="themhinh">
                        <img src="site/views/images/icon_image.png" alt="">
                        <div class="inputhinh">
                            <!-- <label for="inputhinh"><b>Thêm Hình</b> </label> -->
                            <!-- <input type="file" class="imagefet" name="img[]" id="inputhinh" accept="image/png, image/jpg, image/jpeg" multiple="multiple" style="display: none"> -->
                            <label for="control">
                                <span class="btn">Thêm Ảnh</span>
                            </label> 
                            <input style="visibility: hidden; position: absolute;" class="imagefet" type="file" name="img[]" id="control" multiple="multiple">

                   
                        </div>
                    </div>
                </div>
                <div class="boxform">
                    <div class="tieude diadiem">Tên quán</div>
                    <div class="boxinput diadiem">
                        <input autocomplete="off" type="text" id="tenquan" placeholder="Tìm quán, nếu không có hãy thêm quán">
                        <div class="btnbv" id="myBtn">
                            Thêm Quán
                        </div>
                         <!-- The Modal -->
                        <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <div>
                                <label for="">Tên Địa Điểm</label>
                                <input type="text" class="diadiem" id="tendd" placeholder="Thêm Địa Điểm">
                            </div>
                            <div>
                                <label for="">Địa Chỉ</label>
                                <input type="text" class="diadiem" id="diachi" placeholder="Thêm Địa Điểm">
                            </div>
                            <div>
                                <label for="">Ảnh</label>
                                <input type="file" name="sortpic" class="diadiem" name="avt[]" id="anh" placeholder="Thêm Địa Điểm">
                            </div>
                            <div>
                                <div class="btnaddquan" id="btnaddquan">Thêm</div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="boxform">
                    <div class="formqc" id="formqc">
                        
                    </div>
                </div>
                <div class="boxform">
                    <div class="tieude">Loại Món Ăn</div>
                    <select name="loaimon" id="loaimon">
                        <?php foreach ($loaiMonAn as $loai) {
                           echo '<option value="'.$loai['id'].'">'.$loai['name'].'</option>';
                        } ?>
                    </select>
                </div>
                <div class="boxform">
                    <div class="boxdanhgia">
                        <div class="tieude danhgiach">Đánh giá :</div>
                        <div class="rate" id="rateYo"></div>
                        <input type="hidden" class="counter" id="counter" value="5" name="sao">
                    </div>
                </div>
                <input type="hidden" name="idquan" id="idquan">
                <input type="hidden" name="idTag"  id="idTag">
                <div class="boxform">
                    <input type="submit" name="submit" onclick="return validateNewBlog()" value="Đăng bài" class="btn btn-review btn-submit hover">
                </div>
                </form>
            </div>
        </div>
    </main>