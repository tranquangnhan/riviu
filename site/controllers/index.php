<?php
session_start();
ob_start();
require_once "./site/models/index.php";
require_once "./system/conn.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = "home";
}

switch ($act) {
    case 'home':
        $mess = "";
        $baiviet = getallBaiviet();

        $monan = laymonan();
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
            $tag = $_POST['tag'];
            // ahdesau
            $diadiem = $_POST['diadiem'];
            $vitri = $_POST['vitri'];
            $danhgia = $_POST['danhgia'];
            themrv($tieude, $noidung, $tag, $diadiem, $vitri, $danhgia);
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
}

?>