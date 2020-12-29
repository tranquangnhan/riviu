    <!-- end header -->
     <!-- <div class="boxcontent-img mt-2 type1">
        <div class="container-type1">
            <div class="bg">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="boxcontent-img mt-2 type2">
        <div class="container-type1">
            <div class="bg">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
            </div>

        </div>

    </div>
    <div class="boxcontent-img mt-2 type3">
        <div class="container-type1">
            <div class="bg">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
            </div>

        </div>

    </div>
    <div class="boxcontent-img mt-2 type4">
        <div class="container-type1">
            <div class="bg">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                
            </div>

        </div>

    </div>
    <div class="boxcontent-img mt-2 type5">
        <div class="container-type1">
            <div class="bg">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
                <img src="./uploads/thanh-pham-105.jpg" alt="">
            </div>

        </div>

    </div> -->
    <main>
        <div class="boxcenter">
            <div class="boxblog">
                <div class="navmain">
                    <nav>
                        <ol data-v-53d0ffbc="" class="breadcrumb">
                            <li class="active breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item"><?= $tenMon ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="box-imgdm">
                    <div class="imgdm">
                        <img src="./uploads/<?= getImgmon($_GET['idmon']) ?>" alt="">
                        <div class="overplay cover"></div>
                        <div class="btn-share"><img src="./site/views/images/btn-share.png" alt=""></div>
                    </div>
                    <div class="title"><?= $tenMon ?></div>
                </div>

                <?php
                // var_dump(count($reviewList));
                if (count($reviewList != 0)) {
                    foreach ($reviewList as $review) {
                        # code...

                ?>
                        <!-- start blog -->
                        <div class="blog">
                            <?php
                            $tacgia = getInfoTacgia($review['iduser']);
                            ?>
                            <div class="author">
                                <img src="./uploads/<?= $tacgia['avatar'] ?>" alt="">
                            </div>
                            <div class="blog-content">
                                <div class="content-nav">
                                    <div class="boxname">
                                        <div class="name-level">
                                            <div class="name">
                                                <?= $tacgia['tenkh'] ?>
                                            </div>
                                            <!-- <div class="level">level 6</div> -->
                                        </div>
                                        <div class="date"><?= $review['ngaydang'] ?></div>
                                        <div class="star">
                                            <?php
                                            for ($i = 0; $i < $review['sao']; $i++) {
                                                echo '<i class="fa fa-star" aria-hidden="true"> </i> ';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!-- <div class="box-theodoi">
                                         <div>Theo dõi</div> 
                                    </div> -->
                                </div>
                                <?php 

                                    showNhieuAnh($review['id']); ?>
                                <!-- <div class="boxcontent-img mt-2">
                                    <div class="container1">
                                        <div class="bg1">
                                            <img src="./site/views/images/blog1.jpeg" alt="">
                                        </div>
                                        <div class="bg1">
                                            <img src="./site/views/images/blog2.jpeg" alt="">
                                        </div>
                                        <div class="bg1">
                                            <img src="./site/views/images/blog3.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="container2">
                                        <div class="bg2">
                                            <img src="./site/views/images/blog4.jpeg" alt="">
                                        </div>
                                        <div class="bg2">
                                            <img src="./site/views/images/blog5.jpeg" alt="">
                                            <div class="them"><span>+14</span></div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="boxtext">
                                    <a href="?act=chitiet&id=<?= $review['id'] ?>">
                                        <h2 data-v-ccafa7e2="" class="title-h2"><?= $review['tieude'] ?></h2>
                                    </a>
                                    <div class="white-space-word">
                                        <?= $review['noidung'] ?>
                                        <span class="hover btn-see-more-content">Xem thêm</span>
                                    </div>
                                    <div class="tags">
                                        <?php
                                        $idlist = $review['idhashtag'];
                                        if($idlist!='') {
                                        $idlist = explode(",", $idlist);
                                        foreach ($idlist as $idtag) {
                                            $tag = getTagName($idtag);
                                            echo '<a href="' . $tag['id'] . '"><span>#' . $tag['tentag'] . ' </span></a>';
                                        }
                                        }
                                        ?>
                                        <!-- <a href=""><span>#chuyencuaneo</span></a>
                                        <a href=""><span>#chuyencuaneo</span></a>
                                        <a href=""><span>#chuyencuaneo</span></a> -->
                                    </div>
                                    <div class="boxaddress">
                                        <?php $quan = getInfoQuan($review['idquan']) ?>
                                        <div class="boxaddress-img">
                                            <img src="./uploads/<?= $quan['img'] ?>" alt="">
                                        </div>
                                        <div class="boxaddress-text">
                                            <h3 class="title-h3"><b><?= $quan['tenquan'] ?></b></h3>
                                            <p><?= $quan['diachi'] ?></p>
                                        </div>
                                    </div>
                                    <div class="boxlike">

                                        <div class="like" onclick="like(<?= $review['id'] ?>)">
                                            <a>
                                                <?php
                                                if (isset($_SESSION['sid'])) {
                                                    $likeimg = (checkLike($review['id'], $_SESSION['sid'])) ? "./site/views/images/heart_fill.png" : "./site/views/images/btnlike.png";
                                                } else $likeimg = "./site/views/images/btnlike.png";

                                                ?>
                                                <!-- <img id="btn_like" src="<?= $likeimg ?>" alt="">
                                            <span id="soLike_<?= $_GET['id'] ?>"><?= countLike($_GET['id']) ?></span> -->
                                                <img id="btn_like_<?= $review['id'] ?>" src="<?= $likeimg ?>" alt="">
                                                <span id="soLike_<?= $review['id'] ?>"><?= countLike($review['id']) ?></span>
                                            </a>
                                        </div>

                                        <div class="cmt">
                                            <a href="?act=chitiet&id=<?= $review['id'] ?>">
                                                <img src="./site/views/images/btncmt.png" alt="">
                                            </a>
                                        </div>
                                        <div class="share">
                                            <a>
                                                <img src="./site/views/images/sharebv.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    <?php }
                } else { ?>
                    Chưa có bài viết nào về món này
                <?php } ?>
                <!-- end blog -->
            </div>

        </div>
    </main>