<?php 
    $ngaydang = date("d-m-Y", strtotime($baiviet['ngaydang']));
    $tagList = gettag($baiviet['idhashtag']);
    if(isset($baiviet['idquan']))
        $quan = getQuanById($baiviet['idquan']);
?>
<div class="container">
        <div class="left">
            <div class="info">
                <div>
                    <div class="avatar">
                        <img src="./site/views/images/avatar.jpeg" alt="">
                    </div>
                    <div class="tttg">
                        <div><strong><?= $baiviet['name'] ?></strong> <a href="" class="btn-outline">Theo dõi</a></div>
                        <div class="sub"><?= $ngaydang ?> tại <a href=""> <?= $quan['diachi'] ?></a></div>
                    </div>
                </div>
                
                <div class="ratting">
                    <i class="fa fa-star checked"></i><p><span class="small"><?= $baiviet['sao'] ?></span>/5</p>
                </div>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./site/views/images/slide1.jpeg" alt=""></div>
                    <div class="swiper-slide"><img src="./site/views/images/slide2.jpeg" alt=""></div>
                    <div class="swiper-slide"><img src="./site/views/images/slide1.jpeg" alt=""></div>
                    <div class="swiper-slide"><img src="./site/views/images/slide2.jpeg" alt=""></div>
                    <div class="swiper-slide"><img src="./site/views/images/slide1.jpeg" alt=""></div>
                    <div class="swiper-slide"><img src="./site/views/images/slide2.jpeg" alt=""></div>
                    <div class="swiper-slide"><img src="./site/views/images/slide1.jpeg" alt=""></div>
                    <div class="swiper-slide"><img src="./site/views/images/slide2.jpeg" alt=""></div>
                    <div class="swiper-slide"><img src="./site/views/images/slide1.jpeg" alt=""></div>
                    <div class="swiper-slide"><img src="./site/views/images/slide2.jpeg" alt="">0</div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        
            <div class="content">
                <h2><?= $baiviet['tieude'] ?></h2>
                <p><?= $baiviet['noidung'] ?></p>
            </div>
            <div class="hashtag">
                <?php foreach ($tagList as $tag) { ?>
                    <a href="desau">#<?=$tag?></a>
                <?php } ?>
            </div>
            <div class="ttquan">
                <div style="display: flex;">
                    <div class="avatar">
                        <img src="<?= $quan['img']?>" alt="">
                    </div>
                    <div class="ttquan_chitiet">
                        <div>
                            <strong><a href="#"><?= $quan['tenquan'] ?></a></strong>
                            <p><?= $quan['diachi'] ?></p>
                        </div>
                        <div class="ratting2">
                            <i class="fa fa-star checked"></i>
                            <p><span>4</span> (1 đánh giá)</p> 
                        </div>
                        
                    </div>
                </div>
                <a class="btn" href="">
                <div class="post">
                    
                        <img src="./site/views/images/dang.svg" alt="">
                        <p>Viết review</p>
                    
                </div>
            </a>
            </div>
            <div class="comment">
                <div class="thanhtuongtac">
                    <div>
                        <img src="./site/views/images/heart.png" alt="">
                        <span>99</span>
                    </div>
                    <div>
                        <img src="./site/views/images/bookmark_black.png" alt="">
                        <img src="./site/views/images/share_black.png" alt="">
                    </div>
                </div>
                <div class="view">
                    <strong>331</strong> lượt xem bài viết
                </div>
                <div class="binhluan">
                    <img src="./site/views/images/anhmh.png" alt="" style="margin-top: 10px;">
                </div>
            </div>
        </div>
    </div>   
    <script>
		var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
	</script>