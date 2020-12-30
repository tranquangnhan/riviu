<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>riviu</title>
   <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>

    <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>

    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>
    <script>
       var firebaseConfig = {
            apiKey: "AIzaSyB3VhHhWoorBd0qv7XNuJy-VxRZZjJvkQQ",
            authDomain: "login-ee176.firebaseapp.com",
            projectId: "login-ee176",
            storageBucket: "login-ee176.appspot.com",
            messagingSenderId: "724584072357",
            appId: "1:724584072357:web:294f8e044083cd3a85f94c",
            measurementId: "G-B4DVSQFXM1"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
        googleSignIn = () => {
            base_provider = new firebase.auth.GoogleAuthProvider();
    
            firebase.auth().signInWithPopup(base_provider).then(function(result) {
                console.log(result);
                console.log('success login');
            }).catch(function(err) {
                console.log(err);
                console.log('failed to do');
            })
        }
    </script>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

 
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
                        <input autocomplete="off" type="search" id="search" placeholder="Ăn gì đây ?">
                        <div class="btn-search">
                            <img src="site/views/images/search.png" alt="">
                        </div>
                        <div id="listSearch">
                        </div>
                    </div>
                </div>
             
                <div class="profile">
                    <?php
                    $avatar = getTacGia($_SESSION['sid']);

                    if(empty($avatar['avatar'])){
                        $avatar = 'no_avatar.png';
                    }else{
                        $avatar = $avatar['avatar'];
                    }
                    if(isset($_SESSION['sid'])) {
                      ?>
                     <div class="avt">
                        <img src="<?=PATH_IMG_SITE.$avatar?>" alt="" id="open">
                        <div class="menudx"  id="popup">
                            <ul>
                                <li><a href="?act=tttk">Thông tin tài khoản</a></li>
                                <li><a href="index.php?act=logout&idout=1">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="baiviet">
                        <span><a href="?act=thembv">Viết Bài</a></span> 
                    </div>
                    <?php }else{?>
                     <div class="baiviet">
                        <span><a href="?act=login">Đăng Nhập</a></span> 
                    </div>
                    <?php }?>
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
<script src="site/views/js/newblog.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

</body>
</html>
