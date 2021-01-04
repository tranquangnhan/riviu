<?php
session_start();
ob_start();
require_once "site/models/index.php";
require_once "site/models/user.php";
require_once "system/conn.php";
require_once "lib/myfunctions.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = "home";
}

switch ($act) {
    case 'home':
        $mess = "";
        $baiviet = getallBaiviet(1,6);
        $baivietAn = getallBaiviet_(0);
        $baivietUong = getallBaiviet_(1);
        $monUong = getallDouong();
        $monan = getAllMonAn();
        $anThuc = getAllAmThuc();
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
        
                $img = checkUpLoadMany($allFile,PATH_IMG_SITE);
                $sao = $_POST['sao'];
                $iduser =$_SESSION['sid'];
                $loaiMon = $_POST['loaimon'];
                $lastId = themrv($tieude, $noidung,$quan, $tag,$sao,$img,$iduser,$loaiMon);
                if($lastId){
                    header("location: index.php?act=chitiet&id=".$lastId."");
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
        // echo $_SESSION['sid'];
        if(empty($_SESSION['sid'])){
            $arr= array();
            $arr['StatusCode'] = 0;
            echo json_encode($arr);
        }else{
            $arr= array();
            $arr['StatusCode'] = 1;
           
             if(isset($_SESSION['sid'])&&(isset($_GET['idbv']))) {
            $check = checkLike($_GET['idbv'], $_SESSION['sid']);
            if($check) {
                unlike($_GET['idbv'], $_SESSION['sid']);
                $arr['Data'] =0;
            }else{
                like($_GET['idbv'], $_SESSION['sid']);
                 $arr['Data'] =1;
                }
            }
            echo json_encode($arr);
        }

        break;

    case 'countLike':
        if(isset($_GET['idbv'])) {
            $like = refreshLike($_GET['idbv']);
            print($like['tong']);
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
    case 'logout':
        if($_GET['idout']==1){
            unset($_SESSION['role']);
            unset($_SESSION['sid']);
            unset($_SESSION['suser']); 
            header('location: index.php');
        }
    break;

    case 'tttk':
        $thongtin = getThongtin($_SESSION['sid']);
        $view = "./site/views/infoUser.php";
        require_once "./site/views/layout.php";
        break;

    case 'changeinfo':
        if(isset($_POST['submit'])) {
            $name = $_POST['hoten'];
            $id = $_SESSION['sid'];
            $email = $_POST['email'];
            $allFile = $_FILES['avt'];                
            $avt = checkUpLoadMany($allFile,PATH_IMG_SITE);
            $tb= '';
            if(changInfo($name,$email, $pass,$avt, $id)) 
            header("location: index.php?act=tttk");
            echo $tb;
        }
        break;

    case 'trangcanhan':
        if(isset($_GET['id'])) {
            $idnguoidang = $_GET['id'];
           $baiviet = getBvByNguoidang($idnguoidang);
        }
        $view = "./site/views/trangcanhan.php";
        require_once "./site/views/layout.php";
        break;
    
    case 'xemthem':
        $baiviet = getallBaiviet2($_GET['start'],$_GET['end']);
        print_r(json_encode($baiviet));
        break;

    case 'changepass':
        $thongtin = getThongtin($_SESSION['sid']);
        $view = "./site/views/changePass.php";
        require_once "./site/views/layout.php";
        break;   
}

?>