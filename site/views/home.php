<main class="pt-2">
    <div class="boxcenter">
        <h2>Hôm nay ăn gì - Để Riviu lo</h2>
        <div class="owl mt-1">
            <div class="owl-carousel owl-theme">

                <?php
                foreach ($monan as $mon) {
                    echo '
                    <a href="?act=monan&idmon=' . $mon['id'] . '">
                    <div class="item danhmuc">
                        <img src="'.PATH_IMG_SITE.$mon['img'] . '" alt="" class="img-dm">
                        <div class="danhmuc-text">
                            <h4>' . $mon['name'] . '</h4>
                            <p>'.demSobv($mon['id']).' bài viết</p>
                        </div>
                    </div>
                    
                </a>';
                }
                ?>
            </div>
        </div>
        <h2 class="mt-2">Đồ uống</h2>
        <div class="owl mt-1">
            <div class="owl-carousel owl-theme">
                <?php
                foreach ($monUong as $monu) {
                    echo '
                    <a href="?act=monan&idmon=' . $monu['id'] . '">
                    <div class="item danhmuc">
                        <img src="'.PATH_IMG_SITE.$monu['img'] . '" alt="" class="img-dm">
                        <div class="danhmuc-text">
                            <h4>' . $monu['name'] . '</h4>
                            <p>'.demSobv($monu['id']).' bài viết</p>
                        </div>
                    </div>
                    
                </a>'; } ?>
            </div>
        </div>
        <!-- <h2 class="mt-2">Ẩm thực vùng miền</h2>
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
        </div> -->
        <div class="boxbanner mt-2">
            <img src="./site/views/images/banner.png" alt="" class="imgbaner">
        </div>
        <h2 class="mt-2">Mọi người đang ăn gì?</h2>
        <div class="boxbaiviet">
            <div class="tab mb-1">
                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen"><span>Tất
                        Cả</span></button>
                <button class="tablinks" onclick="openCity(event, 'Paris')"><span>Đồ ăn</span></button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')"><span>Thức uống</span></button>
            </div>
            <!-- tab 1 -->
            <div id="London" class=" tabcontent">
                <div class="baivietct">
                    <?php
                    if (isset($baiviet)) {
                        foreach ($baiviet as $bv) {
                            $tacgia = getTacGia($bv['iduser']);
                    ?>
                            <div class="xh baivietct-item">
                                <div class="baivietct-item__img">
                                    <img onerror="this.src='./uploads/error.png';" src="./uploads/<?=$bv['img'] ?>" alt="">
                                    <div class="img-boxhover">
                                        <img src="./site/views/images/bookmark2.png" alt="">
                                        <p><?= $bv['noidung'] ?></p>
                                    </div>
                                </div>
                                <a href="?act=chitiet&id=<?=$bv['id']?>">
                                <h4 class="mt-1"><?= $bv['tieude'] ?></h4>
                                <div class="kh">
                                    <div class="name">
                                        <img src="./uploads/<?=$tacgia['avatar']?>" alt="">
                                        <p><?= $tacgia['name'] ?></p>
                                    </div>
                                    <div class="star">
                                        <img src="./site/views/images/star.png" alt="">
                                        <p><?= $bv['sao'] ?></p>
                                    </div>
                                </div>
                                </a>
                            </div>
                    <?php   }
                    } ?>

                </div>
            </div>
            <!--end tab 1 -->
            <!-- tab 2 -->
            <div id="Paris" class=" tabcontent">
            <div class="baivietct">
                    <?php
                    if (isset($baivietAn)) {
                        foreach ($baivietAn as $bv) {
                            $tacgia = getTacGia($bv['iduser']);
                    ?>
                            <div class="xh baivietct-item">
                                <div class="baivietct-item__img">
                                    <img onerror="this.src='./uploads/error.png';" src="./uploads/<?=$bv['img'] ?>" alt="">
                                    <div class="img-boxhover">
                                        <img src="./site/views/images/bookmark2.png" alt="">
                                        <p><?= $bv['noidung'] ?></p>
                                    </div>
                                </div>
                                <a href="?act=chitiet&id=<?=$bv['id']?>">
                                <h4 class="mt-1"><?= $bv['tieude'] ?></h4>
                                <div class="kh">
                                    <div class="name">
                                        <img src="./uploads/<?=$tacgia['avatar']?>" alt="">
                                        <p><?= $tacgia['name'] ?></p>
                                    </div>
                                    <div class="star">
                                        <img src="./site/views/images/star.png" alt="">
                                        <p><?= $bv['sao'] ?></p>
                                    </div>
                                </div>
                                </a>
                            </div>
                    <?php   }
                    } ?>

                </div>
            </div>
            <!-- end tab2 -->

            <div id="Tokyo" class="tabcontent">
            <div class="baivietct">
                    <?php
                    if (isset($baivietUong)) {
                        foreach ($baivietUong as $bv) {
                            $tacgia = getTacGia($bv['iduser']);
                    ?>
                            <div class="xh baivietct-item">
                                <div class="baivietct-item__img">
                                    <img src="./uploads/<?=$bv['img'] ?>" alt="">
                                    <div class="img-boxhover">
                                        <img onerror="this.src='./uploads/error.png';" src="./site/views/images/bookmark2.png" alt="">
                                        <p><?= $bv['noidung'] ?></p>
                                    </div>
                                </div>
                                <a href="?act=chitiet&id=<?=$bv['id']?>">
                                <h4 class="mt-1"><?= $bv['tieude'] ?></h4>
                                <div class="kh">
                                    <div class="name">
                                        <img src="./uploads/<?=$tacgia['avatar']?>" alt="">
                                        <p><?= $tacgia['name'] ?></p>
                                    </div>
                                    <div class="star">
                                        <img src="./site/views/images/star.png" alt="">
                                        <p><?= $bv['sao'] ?></p>
                                    </div>
                                </div>
                                </a>
                            </div>
                    <?php   }
                    } ?>

                </div>
            </div>
            </div>
        </div>
    </div>
</main>