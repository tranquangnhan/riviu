<?php 
  function checkUser($user,$pass,$remember){
    if($remember) {
        $_COOKIE['sessionId'] = session_id();
    } else{
        unset($_COOKIE);
    } 
    $user = str_replace(";","",$user);
    $user = str_replace("'","",$user);
    $user = str_replace('"',"",$user);
    $pass = str_replace(";","",$pass);
    $pass = str_replace("'","",$pass);
    $pass = str_replace('"',"",$pass);
    $user = addslashes($user);
    $pass = addslashes($pass);
    $sql = "select * from khachhang where user=? and pass=?";
    $user = result1(1,$sql,$user,$pass);
    if(is_array($user)){
        $_SESSION['sid'] = $user['id'];
        $_SESSION['suser']= $user['user'];
        $_SESSION['role'] = $user['role'];
        return true;
    }else{
        return false;
    }
}
function checkUserSignup($user,$pass){
    $user = str_replace(";","",$user);
    $user = str_replace("'","",$user);
    $user = str_replace('"',"",$user);
    $pass = str_replace(";","",$pass);
    $pass = str_replace("'","",$pass);
    $pass = str_replace('"',"",$pass);
    $user = addslashes($user);
    $pass = addslashes($pass);
    $sql = "select * from khachhang where user=? and pass=?";
    $user = result1(1,$sql,$user,$pass);
    if(is_array($user)){
        $_SESSION['sid'] = $user['id'];
        $_SESSION['suser']= $user['user'];
        $_SESSION['role'] = $user['role'];
        return true;
    }else{
        return false;
    }
}
function IsExist ($user){ // kiểm tra xem user đã tồn tại hay chưa
    $sql = "select * from khachhang where user='{$user}'";
    return result1(1,$sql);
}

function checkEmailTonTai($email){
    $sql = "select * from khachhang where email='{$email}'";
    return result1(1,$sql);
}
?>