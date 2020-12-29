<?php
$ngaydang = date("d-m-Y", strtotime($baiviet['ngaydang']));
if($baiviet['idhashtag']!='')
    $tagList = gettag($baiviet['idhashtag']);
if (isset($baiviet['idquan']))
    $quan = getQuanById($baiviet['idquan']);
?>
<div class="container">
    <div class="left">
        <div class="info">
            <div>
                <div class="avatar">
                    <img src="./uploads/<?=$baiviet['avatar']?>" alt="">
                </div>
                <div class="tttg">
                    <div><strong><?= $baiviet['tenkh'] ?></strong></div>
                    <div class="sub"><?= $ngaydang ?> tại <a href=""> <?= $quan['diachi'] ?></a></div>
                </div>
            </div>

            <div class="ratting">
                <i class="fa fa-star checked"></i>
                <p><span class="small"><?= $baiviet['sao'] ?></span>/5</p>
            </div>
        </div>
        <?php if($baiviet['img']!="") {?>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="uploads/<?= $baiviet['img'] ?>" alt=""></div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <?php }?>

        <div class="content">
            <h2><?= $baiviet['tieude'] ?></h2>
            <p><?= $baiviet['noidung'] ?></p>
        </div>
        <div class="hashtag">
            <?php foreach ($tagList as $tag) { ?>
                <a href="desau">#<?= $tag ?></a>
            <?php } ?>
        </div>
        <div class="ttquan">
            <div style="display: flex;">
                <div class="avatarquan">
                    <img src="./uploads/<?= $quan['img'] ?>" alt="">
                </div>
                <div class="ttquan_chitiet">
                    <div>
                        <strong><a href="#"><?= $quan['tenquan'] ?></a></strong>
                        <p><?= $quan['diachi'] ?></p>
                    </div>

                </div>
            </div>
            <a class="btn" href="?act=thembv">
                <div class="post">

                    <img src="./site/views/images/dang.svg" alt="">
                    <p>Viết review</p>

                </div>
            </a>
        </div>
        <div class="comment">
            <div class="thanhtuongtac">
                <div class="like" onclick="like(<?= $_GET['id'] ?>)">
                    <?php
                    if (isset($_SESSION['sid'])) {
                        $likeimg = (checkLike($_GET['id'], $_SESSION['sid'])) ? "./site/views/images/heart_fill.png" : "./site/views/images/btnlike.png";
                    } else $likeimg = "./site/views/images/btnlike.png";

                    ?>
                    <img id="btn_like_<?=$_GET['id']?>" src="<?= $likeimg ?>" alt="">
                    <span id="soLike_<?=$_GET['id']?>"><?= countLike($_GET['id']) ?></span>
                </div>
                <div>
                    <img src="./site/views/images/share_black.png" alt="">
                </div>
            </div>
            <!-- <div class="view">
                <strong>331</strong> lượt xem bài viết
            </div> -->
            <div class="binhluan">
                <p class="border-bottom pb-3"><strong><?= countCmt($_GET['id']) ?> Bình luận</strong></p>
                <div class="box-cmt">
                <img src="./uploads/<?=$baiviet['avatar']?>" alt="">
                    <form action="?act=comment" method="post">
                        <textarea name="noidung" id="" cols="12" rows="10" placeholder="Bình luận"></textarea>
                        <input type="reset" value="Hủy" class="bbtn-second">
                        <input type="hidden" name="idbv" value="<?=$_GET['id']?>">
                        <input type="submit" value="Bình luận" class="bbtn">
                    </form>
                </div>
            </div>
            <div class="binhluanlist">
                <?php 
                    $cmtList = getAllComment($_GET['id']);
                    foreach ($cmtList as $cmt) {
                ?>
                <div class="item">
                    <img src="./uploads/<?=$cmt['avatar']?>" alt="">
                    <div>
                        <p class="user"><?= $cmt['name'] ?></p>
                        <p><?= $cmt['noidung'] ?></p>
                    </div>
                </div>
                <?php }?>
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