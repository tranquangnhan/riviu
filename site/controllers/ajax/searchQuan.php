<?php 
 require_once "../../models/index.php";
 require_once "../../../system/conn.php";
 require_once "../../../lib/myfunctions.php"; 
switch ($_POST['action']) {
    case 'search':
        $arr = array();
        if(isset($_POST['key'])) {
            $quans = searchQuan($_POST['key']);
            $arr['quan'] = $quans;

        }
        echo json_encode($arr);
        break;
    case 'addnewquan':
        $arr = array();

        $allFile = $_FILES['file'];    
        $tenquan = $_POST['tenquan'];
        $diachi = $_POST['diachi'];
        if (move_uploaded_file($_FILES['file']['tmp_name'], '../../../uploads/' . $_FILES['file']['name'])) {
            $img =$_FILES['file']['name'];
            $lastId = themQuanAjax($diachi,$tenquan,$img);
        } 
        $arr['quan'] = getQuanById($lastId);
        echo json_encode($arr);
        break;
}
    
?>

    