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
                        <img src="' . PATH_IMG_SITE . $mon['img'] . '" alt="" class="img-dm">
                        <div class="danhmuc-text">
                            <h4>' . $mon['name'] . '</h4>
                            <p>' . demSobv($mon['id']) . ' bài viết</p>
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
                        <img src="' . PATH_IMG_SITE . $monu['img'] . '" alt="" class="img-dm">
                        <div class="danhmuc-text">
                            <h4>' . $monu['name'] . '</h4>
                            <p>' . demSobv($monu['id']) . ' bài viết</p>
                        </div>
                    </div>
                    
                </a>';
                } ?>
            </div>
        </div>
        <h2 class="mt-2">Ẩm thực vùng miền</h2>
        <div class="owl mt-1">
            <div class="owl-carousel owl-theme">
                 <?php
                    foreach ($anThuc as $amthuc) {
                        echo '
                    <a href="?act=monan&idmon=' . $amthuc['id'] . '">
                    <div class="item danhmuc">
                        <img src="' . PATH_IMG_SITE . $amthuc['img'] . '" alt="" class="img-dm">
                        <div class="danhmuc-text">
                            <h4>' . $amthuc['name'] . '</h4>
                            <p>' . demSobv($amthuc['id']) . ' bài viết</p>
                        </div>
                    </div>
                    
                </a>';
                    } ?>
               
            </div>
        </div>
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
                <div class="baivietct" id="baivietct">
                    <?php
                    if (isset($baiviet)) {
                        foreach ($baiviet as $bv) {
                            $anh = explode(',', $bv['img']);
                            $tacgia = getTacGia($bv['iduser']);
                            if (is_file(PATH_IMG_SITE . explode(',', $bv['img'])[0])) {
                                $imgbv = PATH_IMG_SITE . explode(',', $bv['img'])[0];
                            } else {
                                $imgbv = PATH_IMG_SITE . 'error.png';
                            }
                    ?>
                            <div class="xh baivietct-item">
                                <div class="baivietct-item__img">
                                    <img src="<?= $imgbv ?>" alt="">
                                    <a href="?act=chitiet&id=<?= $bv['id'] ?>">
                                        <div class="img-boxhover">
                                            <img src="./site/views/images/bookmark2.png" alt="">
                                            <p class="limitText"><?= $bv['noidung'] ?></p>
                                            <!-- <p><?= substr($bv['noidung'], 0, 600) . '...' ?></p> -->
                                        </div>
                                    </a>
                                </div>
                                <a href="?act=chitiet&id=<?= $bv['id'] ?>">
                                    <h4 class="mt-1"><?= $bv['tieude'] ?></h4>
                                    <div class="kh">
                                        <div class="name">
                                            <img src="./uploads/<?= $tacgia['avatar'] ?>" alt="">
                                            <p><?= $tacgia['tenkh'] ?></p>
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
                <!-- Sửa đoaạn này nữa -->
                <span class="btn-outline" id="btnxemthem" onclick="loadmore(3,3,<?= totalrow() ?>)">Xem thêm</span>
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
                                    <img onerror="this.src='./uploads/error.png';" src="./uploads/<?= $anh[0] ?>" alt="">
                                    <div class="img-boxhover">
                                        <img src="./site/views/images/bookmark2.png" alt="">
                                        <p class="limitText"><?= $bv['noidung'] ?></p>
                                    </div>
                                </div>
                                <a href="?act=chitiet&id=<?= $bv['id'] ?>">
                                    <h4 class="mt-1"><?= $bv['tieude'] ?></h4>
                                    <div class="kh">
                                        <div class="name">
                                            <img src="./uploads/<?= $tacgia['avatar'] ?>" alt="">
                                            <p><?= $tacgia['tenkh'] ?></p>
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
                                    <img onerror="this.src='./uploads/error.png';" src="./uploads/<?= $anh[0] ?>" alt="">
                                    <div class="img-boxhover">
                                        <img src="./site/views/images/bookmark2.png" alt="">
                                        <p class="limitText"><?= $bv['noidung'] ?></p>
                                    </div>
                                </div>
                                <a href="?act=chitiet&id=<?= $bv['id'] ?>">
                                    <h4 class="mt-1"><?= $bv['tieude'] ?></h4>
                                    <div class="kh">
                                        <div class="name">
                                            <img src="./uploads/<?= $tacgia['avatar'] ?>" alt="">
                                            <p><?= $tacgia['tenkh'] ?></p>
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

<script>
    function loadmore(start, end, total) {
        start = parseInt(start) + 3; 
        if (start > total) {
            start=total;
        }
        $.ajax({
            type: "GET",
            url: "?act=xemthem&start=" + start + "&end=" + end + "&limit=" + total,
            dataType: "JSON",
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                imgbv = 'error.png';
                for (let i = 0; i < response.length; i++) {
                    if (response[i][6] == null || response[i][6] == "") {
                        imgbv = 'error.png';
                    } else {
                        vitrichuoi = response[i][6].indexOf(',');
                        if(vitrichuoi!=-1)        
                            imgbv = response[i][6].slice(0,vitrichuoi);
                        else imgbv = response[i][6];
                    }
        
                    element = '<div class="xh baivietct-item">' +
                        '<div class="baivietct-item__img">' +
                        '<img src="./uploads/' + imgbv + '" alt="">' +
                        '<a href="?act=chitiet&id=' + response[i][0] + '">' +
                        '<div class="img-boxhover">' +
                        '<img src="./site/views/images/bookmark2.png" alt="">' +
                        '<p class="limitText">' + response[i][2] + '</p>' +

                        '</div>' +
                        '</a>' +
                        '</div>' +
                        '<a href="?act=chitiet&id=' + response[i][0] + '">' +
                        '<h4 class="mt-1">' + response[i][1] + '</h4>' +
                        '<div class="kh">' +
                        '<div class="name">' +
                        '<img src="./uploads/' + response[i]['avatar'] + '" alt="">' +
                        '<p>' + response[i]['tenkh'] + '</p>' +
                        '</div>' +
                        '<div class="star">' +
                        '<img src="./site/views/images/star.png" alt="">' +
                        '<p>' + response[i][5] + '</p>' +
                        '</div>' +
                        '</div>' +
                        '</a>' +
                        '</div>'
                    $('#baivietct').append(element);
                }
                $('#btnxemthem').remove();
                $('#London').append('<span class="btn-outline" id="btnxemthem" onclick="loadmore('+start+','+end+',<?= totalrow() ?>)">Xem thêm</span>');
                if(response.length==0) {
                    $('#btnxemthem').remove();
                    $('#London').append('<span class="btn-outline" id="btnthongbao">Đã hết bài viết, nhớ ghé thăm Riviu thường xuyên nhé!</span>')
                }
                
            }
        });

    }
</script>