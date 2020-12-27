<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>riviu</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="site/views/js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- /Nhân  -->
    <script src="site/views/jquery/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="site/views/css/style.css">
    
    <link rel="stylesheet" href="site/views/css/jquery.rateyo.min.css">
    <link rel="stylesheet" href="site/views/css/SweetAlert2.css">

    <script src="site/views/js/jquery.rateyo.min.js"></script>
    <script src="site/views/js/newblog.js"></script>
</head>
<body>  
    <!-- start header  -->
    <header>
        <div class="boxcenter-header">
            <div class="nav">
                <div class="logo">
                    <a href="index.php">
                        <img src="site/views/images/logo.png" alt="">
                    </a>
                </div>
                <div class="search">
                    <!-- <div class="search-left">
                        <button>HỒ CHÍ MINH</button>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </div> -->
                    <div class="search-right">
                        <input type="search" id="search" placeholder="Ăn gì đây ?">
                        <div class="btn-search">
                            <img src="site/views/images/search.png" alt="">
                        </div>
                        <div id="listSearch">
                        </div>
                    </div>
                </div>
                <div class="profile">
                    <div class="chuong">
                        <img src="site/views/images/chuong.png" alt="">
                    </div>
                    <?php if(isset($_SESSION['sid'])) echo '
                     <div class="avt">
                        <img src="site/views/images/avt.png" alt="">
                    </div>
                    <div class="baiviet">
                        <span><a href="?act=thembv">Viết Bài</a></span> 
                    </div>
                    ';else echo ' 
                     <div class="baiviet">
                        <span><a href="?act=login">Đăng Nhập</a></span> 
                    </div>';
                     ?>
                </div>
            </div>
          
        </div>


    </header>
    
    <?php require_once $view ?>
<!-- end header -->
<footer>
    <div class="mxh">
        <a href=""><img src="site/views/images/facebook.svg" alt=""></a>
        <a href=""><img src="site/views/images/insta.svg" alt=""></a>
        <a href=""><img src="site/views/images/tiktok.svg" alt=""></a>
    </div>
    <div class="coppyright">
        © Công Ty TNHH RIVICO
Địa chỉ: 372-374 Trần Hưng Đạo, Phường 2, Quận 5, HCM
Số điện thoại: 1900 272736
MST:0316141166
Giấy phép thiết lập MXH số 528/GP-BTTTT , Ký ngày : 17/11/2020
    </div>
</footer>
<script src="site/views/js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="site/views/js/ajax/searchTag.js"></script>
<script src="site/views/js/ajax/searchQuan.js"></script>
<script src="site/views/js/SweetAlert2.js"></script>
<script src="site/views/js/ajax/login.js"></script>
<script src="site/views/js/ajax/signup.js"></script>
<script src="site/views/js/ajax/search.js"></script>
<script src="site/views/js/home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
</body>
</html>
