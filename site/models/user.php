<?php 
    session_start();
  function checkuser($name,$password,$remember){
    if($remember) {
        $_COOKIE['sessionId'] = session_id();
    } else{
        unset($_COOKIE);
    } 
    $name = str_replace(";","",$name);
    $name = str_replace("'","",$name);
    $name = str_replace('"',"",$name);
    $password = str_replace(";","",$password);
    $password = str_replace("'","",$password);
    $password = str_replace('"',"",$password);
    $name = addslashes($name);
    $password = addslashes($password);
    $sql = "select * from taikhoan where name=? and password=?";
    $name = result1(1,$sql,$name,$password);
    if(is_array($name)){
        $_SESSION['sid'] = $name['id'];
        $_SESSION['sname']= $name['name'];
        $_SESSION['role'] = $name['role'];
        return true;
    }else{
        return false;
    }
}
function checkuserSignup($name,$password){
    $name = str_replace(";","",$name);
    $name = str_replace("'","",$name);
    $name = str_replace('"',"",$name);
    $password = str_replace(";","",$password);
    $password = str_replace("'","",$password);
    $password = str_replace('"',"",$password);
    $name = addslashes($name);
    $password = addslashes($password);
    $sql = "select * from taikhoan where name=? and password=?";
    $name = result1(1,$sql,$name,$password);
    if(is_array($name)){
        $_SESSION['sid'] = $name['id'];
        $_SESSION['sname']= $name['name'];
        $_SESSION['role'] = $name['role'];
        return true;
    }else{
        return false;
    }
}
function IsExist ($name){ // kiểm tra xem name đã tồn tại hay chưa
    $sql = "select * from taikhoan where name=?";
    return result1(1,$sql,$name);
}

function checkEmailTonTai($email){
    $sql = "select * from taikhoan where email=?";
    return result1(1,$sql,$email);
}
function addUser($userName,$passWord){
    $sql = "INSERT INTO taikhoan (name,password) VALUES (?,?)";
    return exec1($sql,$userName,$passWord);
}

function changInfo($name, $username, $pass, $id) {
    return postdulieu("UPDATE `taikhoan` SET `name`='$username',`password`='$pass',`tenkh`='$name' WHERE id = $id");
}
?>