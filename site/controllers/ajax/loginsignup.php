<?php
    include_once '../../../system/conn.php';
    include_once '../../../lib/myfunctions.php';
    include_once '../../models/user.php';
    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'CheckExist': //check tài khoản có tồn tại không
                $Return = array(); //khởi tạo array mới
                $Return['StatusCode'] = (int)((is_array(IsExist ($_POST['Login']))) ? 0 : 1);
                echo json_encode($Return);
                return;
                break;
            case 'Login':
                $Return = array();

                $Return['StatusCode'] = (int)(((checkUser($_POST['Login'],$_POST['Password'],$_POST['Remember']))=== true) ? 0 : 1);

                echo json_encode($Return);
                return;
            case 'CheckNameExist':
                $Return = array();
                if(is_array(IsExist ($_POST['Login']))){
                    $Return['StatusCode'] =1;
                }else{
                    $Return['StatusCode'] =0;
                }
                echo json_encode($Return);
                return;
                break;
            case 'signup':
                $Return = array();
                $userName = trim(stripTags($_POST['username']));
                $passWord = trim(stripTags($_POST['password']));
               
                $Return['StatusCode']  = (int) addUser($userName,$passWord) ? 1 : 0;
                echo json_encode($Return);

                $gansi = checkUserSignup($userName,$passWord);
                $idUser = $gansi['id'];
                return;
            break;
            default:
                # code...
                break;
        }
    }

?>