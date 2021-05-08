<?php
ob_start();
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
        $showAllDmMonAn = showAllDmMonAn();
        require_once "views/dmmonanindex.php";
        break;
    case 'add':
        if(isset($_GET['idedit'])&&($_GET['idedit'])){
            $_SESSION['idedit'] = $_GET['idedit'];
            $id = $_GET['idedit'];
            $motDm = showMotDmMa($id);
            require_once "views/dmmonanedit.php";
        }else{
            require_once "views/dmmonanadd.php";
        }
        if(isset($_POST['them'])&&($_POST['them'])){
           
            $tenDm = stripTags($_POST['tendm']);
            $loaiDm = stripTags($_POST['loaidm']);

            $allFile = $_FILES['avatar1'];              
            // //upload nhiều ảnh
            $imgupload = checkUpLoadMany($allFile,PATH_IMG_ADMIN);

            if(isset($_SESSION['idedit'])&&($_SESSION['idedit'])){
                $id = $_SESSION['idedit'];
                updateDmQuan($id,$tenDm ,$imgupload,$loaiDm);
                unset($_SESSION['idedit']);
            }else{
                addDmMonAn($tenDm,$imgupload,$loaiDm );
            }
            header("location: index.php?ctrl=dmmonan&act=index");
        }   
    break;
    case 'del':
        if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
            $id = $_GET['iddel'];
            xoaDmQuan($id);
        }
        if($_GET['loai'] == 'index'){
            $showAllDmMonAn = showAllDmMonAn();
        }elseif($_GET['loai'] == 'doan'){
            $showAllDmMonAn = showAllDoAn();
        }elseif($_GET['loai'] == 'douong'){
            $showAllDmMonAn = showAllDoUong();
        }elseif($_GET['loai'] == 'amthuc'){
            $showAllDmMonAn = showAllAmThuc();
        }
        require_once "views/dmmonanindex.php";
    break;
    case 'doan':
        $showAllDmMonAn = showAllDoAn();
        require_once "views/dmmonanindex.php";
        break;
    case 'douong':
        $showAllDmMonAn = showAllDoUong();
        require_once "views/dmmonanindex.php";
        break;
    case 'amthuc':
        $showAllDmMonAn = showAllAmThuc();
        require_once "views/dmmonanindex.php";
        break;
    default:
        break;
}

?>