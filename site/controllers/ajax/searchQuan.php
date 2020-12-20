<?php 
 require_once "../../models/index.php";
 require_once "../../../system/conn.php";

switch ($_POST['action']) {
    case 'search':
        $arr = array();
        if(isset($_POST['key'])) {
            $quans = searchQuan($_POST['key']);
            $arr['quan'] = $quans;

        }
        echo json_encode($arr);
        break;
    }
?>

    