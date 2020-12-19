<main class="pt-2">
    <div class="boxcenter">
        <h2>Hôm nay ăn gì - Để Riviu lo</h2>
        <div class="owl mt-1">
            <div class="owl-carousel owl-theme">
                <?php

                foreach ($monan as $ma) {
                    $anhmon = layImgMonAn($ma['id']);


                ?>
                    <div class="item danhmuc">
                        <img src="<?= (isset($anhmon['img'])) ? $anhmon['img'] : ''; ?>" alt="" class="img-dm">
                        <div class="danhmuc-text">
                            <h4><?= $ma['ten'] ?></h4>
                            <p>206 bài viết</p>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
        <h2 class="mt-2">Coffee</h2>
        <div class="owl mt-1">
            <div class="owl-carousel owl-theme">
                <div class="item danhmuc">
                    <img src="./site/views/images/buffet.jpeg" alt="" class="img-dm">
                    <div class="danhmuc-text">
                        <h4>Buffet Nướng</h4>
                        <p>206 bài viết</p>
                    </div>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/milodam.jpeg" alt="" class="img-dm">
                    <div class="danhmuc-text">
                        <h4>Hài Sản</h4>
                        <p>206 bài viết</p>
                    </div>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/haisan.jpeg" alt="" class="img-dm">
                    <div class="danhmuc-text">
                        <h4>Milo Dầm</h4>
                        <p>206 bài viết</p>
                    </div>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/lau.jpeg" alt="" class="img-dm">
                    <div class="danhmuc-text">
                        <h4>Bún Bò</h4>
                        <p>206 bài viết</p>
                    </div>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/bunbo.jpeg" alt="" class="img-dm">
                    <div class="danhmuc-text">
                        <h4>Phở</h4>
                        <p>206 bài viết</p>
                    </div>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/buffet.jpeg" alt="" class="img-dm">
                    <h4>1</h4>
                    <p>206 bài viết</p>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/milodam.jpeg" alt="" class="img-dm">
                    <h4>2</h4>
                    <p>206 bài viết</p>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/haisan.jpeg" alt="" class="img-dm">
                    <h4>3</h4>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/lau.jpeg" alt="" class="img-dm">
                    <h4>4</h4>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/bunbo.jpeg" alt="" class="img-dm">
                    <h4>5</h4>
                </div>
            </div>
        </div>
        <h2 class="mt-2">Ẩm thực vùng miền</h2>
        <div class="owl mt-1">
            <div class="owl-carousel owl-theme">
                <div class="item danhmuc">
                    <img src="./site/views/images/buffet.jpeg" alt="" class="img-dm">
                    <div class="danhmuc-text">
                        <h4>Buffet Nướng</h4>
                        <p>206 bài viết</p>
                    </div>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/milodam.jpeg" alt="" class="img-dm">
                    <div class="danhmuc-text">
                        <h4>Hài Sản</h4>
                        <p>206 bài viết</p>
                    </div>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/haisan.jpeg" alt="" class="img-dm">
                    <div class="danhmuc-text">
                        <h4>Milo Dầm</h4>
                        <p>206 bài viết</p>
                    </div>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/lau.jpeg" alt="" class="img-dm">
                    <div class="danhmuc-text">
                        <h4>Bún Bò</h4>
                        <p>206 bài viết</p>
                    </div>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/bunbo.jpeg" alt="" class="img-dm">
                    <div class="danhmuc-text">
                        <h4>Phở</h4>
                        <p>206 bài viết</p>
                    </div>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/buffet.jpeg" alt="" class="img-dm">
                    <h4>1</h4>
                    <p>206 bài viết</p>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/milodam.jpeg" alt="" class="img-dm">
                    <h4>2</h4>
                    <p>206 bài viết</p>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/haisan.jpeg" alt="" class="img-dm">
                    <h4>3</h4>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/lau.jpeg" alt="" class="img-dm">
                    <h4>4</h4>
                </div>
                <div class="item danhmuc">
                    <img src="./site/views/images/bunbo.jpeg" alt="" class="img-dm">
                    <h4>5</h4>
                </div>
            </div>
        </div>
        <div class="boxbanner mt-2">
            <img src="./site/views/images/banner.png" alt="" class="imgbaner">
        </div>
        <h2 class="mt-2">Đề xuất</h2>
        <div class="boxbaiviet">
            <div class="tab mb-1">
                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen"><span>Tất
                        Cả</span></button>
                <button class="tablinks" onclick="openCity(event, 'Paris')"><span>Trending</span></button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')"><span>Ăn Trưa</span></button>
            </div>
            <!-- tab 1 -->
            <div id="London" class=" tabcontent">
                <div class="baivietct">
                    <?php
                    if (isset($baiviet)) {
                        foreach ($baiviet as $bv) {
                    ?>
                            <div class="xh baivietct-item">
                                <div class="baivietct-item__img">
                                    <img src="<?=$bv['img']?>" alt="">
                                    <div class="img-boxhover">
                                        <img src="./site/views/images/bookmark2.png" alt="">
                                        <p><?= $bv['noidung'] ?></p>
                                    </div>
                                </div>
                                <h4 class="mt-1"><?= $bv['tieude'] ?></h4>
                                <div class="kh">
                                    <div class="name">
                                        <img src="<?= $bv['avatar']?>" alt="">
                                        <p><?= $bv['name'] ?></p>
                                    </div>
                                    <div class="star">
                                        <img src="./site/views/images/star.png" alt="">
                                        <p><?= $bv['sao'] ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php   }
                    } ?>
 
                </div>
            </div>
            <!--end tab 1 -->
            <!-- tab 2 -->
            <div id="Paris" class=" tabcontent">
                <div class="baivietct">
                    <div class="xh baivietct-item">
                        <div class="baivietct-item__img">
                            <img src="./site/views/images/item1.jpeg" alt="">
                            <div class="img-boxhover">
                                <img src="./site/views/images/bookmark2.png" alt="">
                                <p>Bảo tàng là đơn vị trực thuộc Sở Văn hoá và Thể Thao thành phố Hồ Chí Minh. Nằm trong
                                    hệ thống các bảo tàng Việt Nam, các bảo tàng vì hoà bình thế giới và là thành viên
                                    của Hội đồng các bảo tàng thế giới (ICOM).

                                    Bảo tàng nằm ngay trung tâm, khá gần các điểm du lịch như Dinh Độc Lập, Nhà Thờ Đức
                                    Bà, Bưu Điện Thành Phố. Dễ tìm, gần ngay công viên Lê Thị Riêng.

                                    Đến với bảo tàng, ta như được chứng kiến toàn bộ khung cảnh thời chiến tranh của
                                    nhân dân ta. Ở nơi đây mang lại cho mình nhiều cảm xúc, ...</p>
                            </div>
                        </div>
                        <h4 class="mt-1">RANDOM DÃY SỐ MAY MẮN CỦA CHỦ NHÂN CHIẾC IPHONE 12 PROMAX XỊN SÒ </h4>
                        <div class="kh">
                            <div class="name">
                                <img src="./site/views/images/kh1.jpeg" alt="">
                                <p>Dương Quế Trinh</p>
                            </div>
                            <div class="star">
                                <img src="./site/views/images/star.png" alt="">
                                <p>5</p>
                            </div>
                        </div>
                    </div>
                    <div class=" baivietct-item ">
                        <div class="baivietct-item__img">
                            <img src="./site/views/images/item2.jpeg" alt="">
                            <div class="img-boxhover">
                                <img src="./site/views/images/bookmark2.png" alt="">
                                <p>Bảo tàng là đơn vị trực thuộc Sở Văn hoá và Thể Thao thành phố Hồ Chí Minh. Nằm trong
                                    hệ thống các bảo tàng Việt Nam, các bảo tàng vì hoà bình thế giới và là thành viên
                                    của Hội đồng các bảo tàng thế giới (ICOM).

                                    Bảo tàng nằm ngay trung tâm, khá gần các điểm du lịch như Dinh Độc Lập, Nhà Thờ Đức
                                    Bà, Bưu Điện Thành Phố. Dễ tìm, gần ngay công viên Lê Thị Riêng.

                                    Đến với bảo tàng, ta như được chứng kiến toàn bộ khung cảnh thời chiến tranh của
                                    nhân dân ta. Ở nơi đây mang lại cho mình nhiều cảm xúc, ...</p>
                            </div>
                        </div>
                        <h4 class="mt-1">ĐẦU TUẦN LÀM NGAY ĐĨA XIÊN NƯỚNG NÀO !!</h4>
                        <div class="kh">
                            <div class="name">
                                <img src="./site/views/images/kh1.jpeg" alt="">
                                <p>Dương Quế Trinh</p>
                            </div>
                            <div class="star">
                                <img src="./site/views/images/star.png" alt="">
                                <p>5</p>
                            </div>
                        </div>
                    </div>
                    <div class="xh baivietct-item">
                        <div class="baivietct-item__img">
                            <img src="./site/views/images/item3.jpeg" alt="">
                        </div>
                        <h4 class="mt-1">BÒ LÁ LỐT ANH BA</h4>
                        <div class="kh">
                            <div class="name">
                                <img src="./site/views/images/kh1.jpeg" alt="">
                                <p>Dương Quế Trinh</p>
                            </div>
                            <div class="star">
                                <img src="./site/views/images/star.png" alt="">
                                <p>5</p>
                            </div>
                        </div>
                    </div>
                    <div class="xh baivietct-item ">
                        <div class="baivietct-item__img">
                            <img src="./site/views/images/item2.jpeg" alt="">
                            <div class="img-boxhover">
                                <img src="./site/views/images/bookmark2.png" alt="">
                                <p>Bảo tàng là đơn vị trực thuộc Sở Văn hoá và Thể Thao thành phố Hồ Chí Minh. Nằm trong
                                    hệ thống các bảo tàng Việt Nam, các bảo tàng vì hoà bình thế giới và là thành viên
                                    của Hội đồng các bảo tàng thế giới (ICOM).

                                    Bảo tàng nằm ngay trung tâm, khá gần các điểm du lịch như Dinh Độc Lập, Nhà Thờ Đức
                                    Bà, Bưu Điện Thành Phố. Dễ tìm, gần ngay công viên Lê Thị Riêng.

                                    Đến với bảo tàng, ta như được chứng kiến toàn bộ khung cảnh thời chiến tranh của
                                    nhân dân ta. Ở nơi đây mang lại cho mình nhiều cảm xúc, ...</p>
                            </div>
                        </div>
                        <h4 class="mt-1">ĐẦU TUẦN LÀM NGAY ĐĨA XIÊN NƯỚNG NÀO !!</h4>
                        <div class="kh">
                            <div class="name">
                                <img src="./site/views/images/kh1.jpeg" alt="">
                                <p>Dương Quế Trinh</p>
                            </div>
                            <div class="star">
                                <img src="./site/views/images/star.png" alt="">
                                <p>5</p>
                            </div>
                        </div>
                    </div>
                    <div class=" baivietct-item ">
                        <div class="baivietct-item__img">
                            <img src="./site/views/images/item2.jpeg" alt="">
                            <div class="img-boxhover">
                                <img src="./site/views/images/bookmark2.png" alt="">
                                <p>Bảo tàng là đơn vị trực thuộc Sở Văn hoá và Thể Thao thành phố Hồ Chí Minh. Nằm trong
                                    hệ thống các bảo tàng Việt Nam, các bảo tàng vì hoà bình thế giới và là thành viên
                                    của Hội đồng các bảo tàng thế giới (ICOM).

                                    Bảo tàng nằm ngay trung tâm, khá gần các điểm du lịch như Dinh Độc Lập, Nhà Thờ Đức
                                    Bà, Bưu Điện Thành Phố. Dễ tìm, gần ngay công viên Lê Thị Riêng.

                                    Đến với bảo tàng, ta như được chứng kiến toàn bộ khung cảnh thời chiến tranh của
                                    nhân dân ta. Ở nơi đây mang lại cho mình nhiều cảm xúc, ...</p>
                            </div>
                        </div>
                        <h4 class="mt-1">ĐẦU TUẦN LÀM NGAY ĐĨA XIÊN NƯỚNG NÀO !!</h4>
                        <div class="kh">
                            <div class="name">
                                <img src="./site/views/images/kh1.jpeg" alt="">
                                <p>Dương Quế Trinh</p>
                            </div>
                            <div class="star">
                                <img src="./site/views/images/star.png" alt="">
                                <p>5</p>
                            </div>
                        </div>
                    </div>
                    <div class="xh baivietct-item ">
                        <div class="baivietct-item__img">
                            <img src="./site/views/images/item2.jpeg" alt="">
                            <div class="img-boxhover">
                                <img src="./site/views/images/bookmark2.png" alt="">
                                <p>Bảo tàng là đơn vị trực thuộc Sở Văn hoá và Thể Thao thành phố Hồ Chí Minh. Nằm trong
                                    hệ thống các bảo tàng Việt Nam, các bảo tàng vì hoà bình thế giới và là thành viên
                                    của Hội đồng các bảo tàng thế giới (ICOM).

                                    Bảo tàng nằm ngay trung tâm, khá gần các điểm du lịch như Dinh Độc Lập, Nhà Thờ Đức
                                    Bà, Bưu Điện Thành Phố. Dễ tìm, gần ngay công viên Lê Thị Riêng.

                                    Đến với bảo tàng, ta như được chứng kiến toàn bộ khung cảnh thời chiến tranh của
                                    nhân dân ta. Ở nơi đây mang lại cho mình nhiều cảm xúc, ...</p>
                            </div>
                        </div>
                        <h4 class="mt-1">ĐẦU TUẦN LÀM NGAY ĐĨA XIÊN NƯỚNG NÀO !!</h4>
                        <div class="kh">
                            <div class="name">
                                <img src="./site/views/images/kh1.jpeg" alt="">
                                <p>Dương Quế Trinh</p>
                            </div>
                            <div class="star">
                                <img src="./site/views/images/star.png" alt="">
                                <p>5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end tab2 -->

            <div id="Tokyo" class="tabcontent">
                <h3>Tokyo</h3>
                <p>Tokyo is the capital of Japan.</p>
            </div>
        </div>
    </div>
</main>