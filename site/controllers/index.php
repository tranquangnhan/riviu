<?php
session_start();
ob_start();
require_once "./site/models/index.php";
require_once "./system/conn.php";
require_once "lib/myfunctions.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = "home";
}

switch ($act) {
    case 'home':
        $mess = "";
        // $baiviet = getallBaiviet();
        $monUong = getallDouong();
        $monan = getAllMonAn();
        // print_r($monan);
        $view = "./site/views/home.php";
        require_once "./site/views/layout.php";
        break;

    case 'chitiet':
        if(isset($_GET['id'])) {
            $baiviet = layDanhgiaChitiet($_GET['id']);
        }
        $view = "./site/views/chitiet.php";
        require_once "./site/views/layout.php";
        break;
    
    case 'thembv':
        echo ' <link rel="stylesheet" href="site/views/css/newblog.css">';
        echo '<link rel="stylesheet" href="site/views/css/allblog.css">';
        if($_SESSION['sid'] && isset($_SESSION['sid'])){
            $loaiMonAn = loaiMonAn();
            $view = "./site/views/thembv.php";
            require_once "./site/views/layout.php";
            break;
        }else{
            header("location: index.php?act=login");
        }
       
    case 'thembv_':
        if($_SESSION['sid'] && isset($_SESSION['sid']))
        {
            if(isset($_POST['submit'])) 
            {
                $tieude = $_POST['tieude'];
                $noidung = $_POST['noidung'];
                $tag = $_POST['idTag'];
                $quan = $_POST['idquan'];
                $allFile = $_FILES['img'];
        
                $img = checkUpLoadMany($allFile);
                $sao = $_POST['sao'];
                $iduser =$_SESSION['sid'];
                $loaiMon = $_POST['loaimon'];

                if( themrv($tieude, $noidung,$quan, $tag,$sao,$img,$iduser,$loaiMon)){
                    header("location: index.php?act=home");
                };
            }

        }else
        {
            header("location: index.php?act=login");
        }
        break;
    case 'monan':
        if(isset($_GET['idmon'])) {
            $reviewList = getBvByMon($_GET['idmon']);
            $tenMon = getNameMon($_GET['idmon']);
        }
        $view = "./site/views/monan.php";
        require_once "./site/views/layout.php";
        break;

    case 'login':
        echo '<link rel="stylesheet" href="site/views/css/allblog.css">';
        echo '<link rel="stylesheet" href="site/views/css/login.css">';
        $view = "./site/views/login.php";
        require_once "./site/views/layout.php";
        break;

    case 'searchQuan':
        if(isset($_GET['name']))
        $quan = searchQuan($_GET['name']);
        $QuanList = array("quanarr"=>$quan); 
        print_r(json_encode($QuanList));
        break;
        
    case 'signup':
        echo '<link rel="stylesheet" href="site/views/css/allblog.css">';
        echo '<link rel="stylesheet" href="site/views/css/login.css">';
        $view = "./site/views/signup.php";
        require_once "./site/views/layout.php";
        break;

    case 'like':
        if(isset($_SESSION['sid'])&&(isset($_GET['idbv']))) {
            $check = checkLike($_GET['idbv'], $_GET['iduser']);
            if($check) {
                unlike($_GET['idbv'], $_GET['iduser']);
                print(0);
            }else{
                like($_GET['idbv'], $_GET['iduser']);
                print(1);
            }
        }else {
            header("location: index.php?act=login");
        }
        break;

    case 'comment':
        if(isset($_SESSION['sid'])) {
            $noidung = $_POST['noidung'];
            $idbv = $_POST['idbv'];
            dangCmt($noidung, $idbv);
            header("location: index.php?act=chitiet&id=$idbv");
        }else header("location: index.php?act=login");
        break;

    case 'search':
        $arr = array();
        if(isset($_POST['key'])) {
            $arrSearch = searchByKey($_POST['key']);
            $arr['monan'] = $arrSearch;
        }
        echo json_encode($arr['monan']);
        break;
}

?>