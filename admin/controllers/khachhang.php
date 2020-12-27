<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showallkh = showallkh();
            include_once "views/khachhangindex.php";
        break;
        case 'add':
            if(isset($_GET['idedit'])&&($_GET['idedit'])){
                $_SESSION['idedit'] = $_GET['idedit'];
                $showkhedit = showkhedit($_SESSION['idedit']);
                include_once "views/khachhangedit.php";
            }else{
                include_once "views/khachhangadd.php";
            }
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){
                $allFile = $_FILES['avatar1'];                
                $imgupload = checkUpLoadMany($allFile,PATH_IMG_ADMIN);

                $tenkh = stripTags($_POST['tenkh']);
                $user = stripTags($_POST['tenuser']);
                
                $pass= stripTags($_POST['pass']);
                $role = $_POST['vaitro'];

                $email =stripTags( $_POST['email']);
    
    
                settype($role,"int");
                
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    updatekh($_GET['idedit'],$user,$pass,$role,$imgupload,$email,$tenkh); 
                }else{
                    addkh($user,$pass,$role,$imgupload,$email,$tenkh);
                }
                header("location: index.php?ctrl=khachhang&act=index");
            }
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoakhachhang($id);
            }
            $showallkh = showallkh();
        include_once "views/khachhangindex.php";
        break;
            default:
                break;
    }
?>