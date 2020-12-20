<?php 
 require_once "../../models/index.php";
 require_once "../../../system/conn.php";

switch ($_POST['action']) {
    case 'search':
        $arr = array();
        if(isset($_POST['key'])) {
            $keys = searchTag($_POST['key']);
            $arr['key'] = $keys;

        }
        echo json_encode($arr);
        break;
    }
?>

    