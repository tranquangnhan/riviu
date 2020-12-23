<?php
ob_start();
session_start();
include "../models/khachhang.php";
include "../../system/conn.php";
include "../../lib/myfunctions.php";
if(isset($_GET['act'])&&($_GET['act'])){
$act = $_GET['act'];
}else{
    $act = 'home';
}
switch ($act) {
    case 'index':
        $showAllQuan = showAllQuan();
        require_once "views/quanindex.php";
        break;
    case 'add':
        if(isset($_GET['idedit'])&&($_GET['idedit'])){
            $_SESSION['idedit'] = $_GET['idedit'];
            $id = $_GET['idedit'];
            $motQuan = showMotQuan($id);
            include_once "views/quanedit.php";
        }else{
            include_once "views/quanadd.php";
        }
        if(isset($_POST['them'])&&($_POST['them'])){
           
            $diaChi = stripTags($_POST['diachi']);
            $tenQuan = stripTags($_POST['tenquan']);

            $allFile = $_FILES['avatar1'];              
            // //upload nhiều ảnh
            $imgupload = checkUpLoadMany($allFile);

            if(isset($_SESSION['idedit'])&&($_SESSION['idedit'])){
                $id = $_SESSION['idedit'];
                updateQuan($id,$diaChi,$tenQuan,$imgupload);
                unset($_SESSION['idedit']);
            }else{
                 addQuan($diaChi,$tenQuan,$imgupload);
            }
            header("location: index.php?ctrl=quan&act=index");
        }   
    break;
    case 'del':
        if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
            $id = $_GET['iddel'];
            xoaQuan($id);
        }
        $showAllQuan = showAllQuan();
        require_once "views/quanindex.php";
    break;
        default:
            break;
}

?>