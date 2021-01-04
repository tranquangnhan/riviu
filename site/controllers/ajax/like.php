<?php
    include_once '../../../system/conn.php';
    include_once '../../../lib/myfunctions.php';
    include_once '../../models/user.php';
    include_once '../../models/index.php';
    if ($_POST['action'])
    {
        switch ($_POST['action']) {
            case 'checkIsLogin': 
                $array = array(); 
                if(isset($_SESSION['sid'])&&($_SESSION['sid'])){
                    $array['StatusCode'] = 1;
                }else{
                    $array['StatusCode'] = 0;
                }
                echo json_encode($array);
                return;
                break;
            case 'likeAndUnlike':
                $array = array(); 

                if(isset($_POST['idbv'])&&($_POST['idbv'])) 
                {
                    $check = checkLike($_POST['idbv'], $_SESSION['sid']);
                    if($check) 
                    {
                        unlike($_POST['idbv'], $_SESSION['sid']);
                        $array['Data'] = 0;
                    }else
                    {
                        like($_POST['idbv'], $_SESSION['sid']);
                        $array['Data'] =1;
                    }
                }

                $array['StatusCode'] = 1;
                echo json_encode($array);
                break;
            default:
                # code...
                break;
        }
    }

?>