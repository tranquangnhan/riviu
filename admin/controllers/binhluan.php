<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showbl = showbl();
            require_once "views/binhluanindex.php";
        break;
 
        case 'edit':
    
            if(isset($_GET['idedit'])&&($_GET['idedit']>0)){
                $_SESSION['idedit'] = $_GET['idedit'];
                $id = $_GET['idedit'];
                
                $showbledit = showBlEdit($_SESSION['idedit']);
                if(isset($_POST['sua'])&&($_POST['sua'])){
             
                    $idbaiviet = $_POST['idbaiviet'];
                    $noidung = $_POST['noidung'];
                    $iduser = $_POST['iduser'];

                    editBinhLuan($id,$idbaiviet,$noidung,$iduser);
                    header("location: index.php?ctrl=binhluan&act=index");
                }

            }
            require_once "views/binhluanedit.php";
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoaBinhLuan($id);
            }
            $showbl = showbl();
        require_once "views/binhluanindex.php";
        break;
            default:
                break;
    }
?>