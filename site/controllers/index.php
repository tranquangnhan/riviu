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
        $baiviet = getallBaiviet();

        $tag = layDSTag();
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
        
        echo '<link rel="stylesheet" href="site/views/css/allblog.css">';
        $view = "./site/views/thembv.php";
        require_once "./site/views/layout.php";
        break;

    case 'thembv_':

        if(isset($_POST['submit'])) {
            $tieude = $_POST['tieude'];
            $noidung = $_POST['noidung'];
            $tag = $_POST['idTag'];
            $quan = $_POST['idquan'];
            $allFile = $_FILES['img'];
                        //upload nhiều ảnh
            $img = checkUpLoadMany($allFile);
            $sao = $_POST['sao'];
            $iduser =$_SESSION['sid'];

            themrv($tieude, $noidung,$quan, $tag,$sao,$img,$iduser);
        }
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
}

?>