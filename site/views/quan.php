    <main>
        <div class="boxcenter">
            <div class="boxblog">
                <div class="navmain">
                    <nav>
                        <ol data-v-53d0ffbc="" class="breadcrumb">
                            <li class="active breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item"><?= $infoQuan['tenquan'] ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="box-imgdm">
                    <div class="imgdm">
                        <img src="./uploads/<?= $infoQuan['img'] ?>" alt="">
                        <div class="overplay cover"></div>
                        <div class="btn-share"><img src="./site/views/images/btn-share.png" alt=""></div>
                        <div class="title"><?= $infoQuan['tenquan'] ?></div>
                    </div>
                </div>

                <?php
                if (count($reviewList != 0)) {
                    foreach ($reviewList as $review) {
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
                                                <a class="linkstyle" href="?act=trangcanhan&id=<?= $tacgia['id'] ?>">
                                                    <?= $tacgia['tenkh'] ?>
                                                </a>
                                            </div>
                                            <!-- <div class="level">level 6</div> -->
                                        </div>
                                        <div class="date"><?= date("d-m-y", strtotime($review['ngaydang'])) ?></div>
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
                                <div class="boxtext">
                                    <a href="?act=chitiet&id=<?= $review['id'] ?>">
                                        <h2 data-v-ccafa7e2="" class="title-h2"><?= $review['tieude'] ?></h2>
                                    </a>
                                    <div class="white-space-word">
                                        <?= $review['noidung'] ?>
                                        <!-- <span class="hover btn-see-more-content">Xem thêm</span> -->
                                    </div>
                                    <div class="tags">
                                        <?php
                                        $idlist = $review['idhashtag'];
                                        if ($idlist != '') {
                                            $idlist = explode(",", $idlist);
                                            foreach ($idlist as $idtag) {
                                                $tag = getTagName($idtag);
                                                echo '<a href=""><span>#' . $tag['tentag'] . ' </span></a>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <a href="?act=quan&idquan=<?= $review['idquan'] ?>">
                                        <div class="boxaddress">
                                            <div class="boxaddress-img">
                                                <img src="./uploads/<?= $infoQuan['img'] ?>" alt="">
                                            </div>
                                            <div class="boxaddress-text">
                                                <h3 class="title-h3"><b><?= $infoQuan['tenquan'] ?></b></h3>
                                                <p><?= $infoQuan['diachi'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="boxlike">

                                        <div class="like" onclick="like(<?= $review['id'] ?>)">
                                            <a>
                                                <?php
                                                if (isset($_SESSION['sid'])) {
                                                    $likeimg = (checkLike($review['id'], $_SESSION['sid'])) ? "./site/views/images/heart_fill.png" : "./site/views/images/btnlike.png";
                                                } else $likeimg = "./site/views/images/btnlike.png";

                                                ?>

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