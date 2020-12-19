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
}

?>