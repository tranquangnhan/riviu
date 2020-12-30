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
                 <?php
                foreach ($anThuc as $amthuc) {
                    echo '
                    <a href="?act=monan&idmon=' . $amthuc['id'] . '">
                    <div class="item danhmuc">
                        <img src="'.PATH_IMG_SITE.$amthuc['img'] . '" alt="" class="img-dm">
                        <div class="danhmuc-text">
                            <h4>' . $amthuc['name'] . '</h4>
                            <p>'.demSobv($amthuc['id']).' bài viết</p>
                        </div>
                    </div>
                    
                </a>'; } ?>
               
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
                            $anh = explode(',', $bv['img']);
                            $tacgia = getTacGia($bv['iduser']);
                            if(is_file(PATH_IMG_SITE.explode(',',$bv['img'])[0])){
                                $imgbv = PATH_IMG_SITE.explode(',',$bv['img'])[0];
                            }else{
                                $imgbv =PATH_IMG_SITE.'error.png';
                            }
                    ?>
                            <div class="xh baivietct-item">
                                <div class="baivietct-item__img">
                                <img onerror="this.src='./uploads/error.png';" src="./uploads/<?=$anh[0]?>" alt="">
                                    <a href="?act=chitiet&id=<?=$bv['id']?>">
                                        <div class="img-boxhover">
                                            <img src="./site/views/images/bookmark2.png" alt="">
                                            <p class="limitText"><?= $bv['noidung'] ?></p>
                                            <!-- <p><?= substr($bv['noidung'],0,600) .'...'?></p> -->
                                        </div>
                                    </a>
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
                            $anh = explode(',', $bv['img']);
                            $tacgia = getTacGia($bv['iduser']);
                    ?>
                            <div class="xh baivietct-item">
                                <div class="baivietct-item__img">
                                    <img onerror="this.src='./uploads/error.png';" src="./uploads/<?=$anh[0] ?>" alt="">
                                    <div class="img-boxhover">
                                        <img src="./site/views/images/bookmark2.png" alt="">
                                        <p class="limitText"><?= $bv['noidung'] ?></p>
                                    </div>
                                </div>
                                <a href="?act=chitiet&id=<?=$bv['id']?>">
                                <h4 class="mt-1"><?= $bv['tieude'] ?></h4>
                                <div class="kh">
                                    <div class="name">
                                        <img src="./uploads/<?=$tacgia['avatar']?>" alt="">
                                        <p>z<?= $tacgia['name'] ?></p>
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
                            $anh = explode(',', $bv['img']);
                    ?>
                            <div class="xh baivietct-item">
                                <div class="baivietct-item__img">
                                    <img onerror="this.src='./uploads/error.png';" src="./uploads/<?=$anh[0] ?>" alt="">
                                    <div class="img-boxhover">
                                        <img src="./site/views/images/bookmark2.png" alt="">
                                        <p class="limitText"><?= $bv['noidung'] ?></p>
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