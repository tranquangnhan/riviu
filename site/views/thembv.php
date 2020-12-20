<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>riviu</title>
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/allblog.css">
    <link rel="stylesheet" href="css/newblog.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.rateyo.min.css">
    <script src="js/jquery.rateyo.min.js"></script>
    <script src="js/newblog.js"></script>
</head> -->

    <!-- end header -->
    <main>
        <div class="boxcenter">
            <div class="boxnewblog">
                <div class="navmain">
                    <nav>
                        <ol data-v-53d0ffbc="" class="breadcrumb">
                            <li class="active breadcrumb-item">Trang chủ</li>
                            <li class="breadcrumb-item">Buffet Nướng</li>
                        </ol>
                    </nav>
                </div>
                <form action="index.php?act=thembv_" method="post"  enctype="multipart/form-data">
                <div class="boxform">
                    <div class="tieude tieudeafter">Tiêu Đề</div>
                    <div class="boxinput">
                        <input type="text" placeholder="Hãy viết tiêu đề bài">
                    </div>
                </div>
                <div class="boxform">
                    <textarea class="noidung" name="" value="" id="" cols="30" rows="10" placeholder="Hãy viết cảm nhận của bạn"></textarea>
                </div>
                <div class="boxform">
                    <div class="tieude tieudeafter">Tag</div>
                    <div class="boxinput" id="boxinpt-tag">
                        <input type="text" placeholder="Tìm kiếm hay thêm tag" name="tag" id="tag">
                        <div class="box-suggest">
                            <ul id="box-suggest">
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="boxform">
                    <div class="themhinh">
                        <img src="site/views/images/icon_image.png" alt="">
                        <div class="inputhinh">
                            <label for="inputhinh"><b>Thêm Hình</b> </label>
                            <input type="file" name="img[]" id="inputhinh" accept="image/png, image/jpg, image/jpeg" multiple="multiple" style="display: none">
                        </div>
                    </div>
                </div>
                <div class="boxform">
                    <div class="tieude diadiem">Tên quán</div>
                    <div class="boxinput diadiem">
                        <input type="text" id="tenquan" placeholder="Hãy nhập tên của quán">
                    </div>
                </div>
                <!-- <div class="boxform">
                    <div class="tieude ">Vị trí</div>
                    <select name="" id="">
                        <option value="">Thành Phố</option>
                        <option value="">Hồ Chí Minh</option>
                    </select>
                    <select name="" id="">
                        <option value="">Tỉnh</option>
                        <option value="">Daklak</option>
                    </select>
                    <select name="" id="">
                        <option value="">Quận/Huyện</option>
                        <option value="">Cưkuin</option>
                    </select>
                </div> -->
                <div class="boxform">
                    <div class="formqc" id="formqc">
                        
                    </div>


                </div>
                <div class="boxform">
                    <div class="tieude danhgia">Đánh giá của bạn</div>
                </div>
                <div class="boxform">
                    <div class="boxdanhgia">
                        <div class="tieude danhgiach">Đánh giá chung :</div>
                        <div class="rate" id="rateYo"></div>
                    </div>
                </div>
                <!-- <div class="boxform">
                    <div class="tieude tieudeafter">Youtube</div>
                    <div class="boxinput">
                        <input type="text" placeholder="https://youtube.com/watch?v=zzzzz">
                    </div>
                </div> -->
                <input type="hidden" name="idquan" id="idquan">
                <input type="hidden" name="idTag" id="idTag">
                <div class="boxform">
                    <input type="submit" name="submit" value="Đăng bài" class="btn btn-review btn-submit hover">
                </div>
                </form>
            </div>
        </div>
    </main>
