<?php

function showallkh(){// show tất cả khách hàng
    $sql ="select * from taikhoan order by id desc";
    return result1(0,$sql);// thì ở đây hàm chỉ cần thêm 2 tham số
                            // tham số đầu tiên là 0: show tất cả, tham số 2 là $sql
}
function showTenKh($id){
    $sql ="select * from taikhoan where id= '$id'";
    return result1(1,$sql)['name'];
}
function xoakhachhang($id){
    $sql = "DELETE FROM taikhoan WHERE id=".$id;
    exec1($sql);
}
function addkh($user,$pass,$role,$imgupload,$email,$tenkh){
    $sql = "INSERT INTO taikhoan (name,password,role,avatar,email,tenkh) VALUES (?,?,?,?,?,?)";
    return exec1($sql,$user,$pass,$role,$imgupload,$email,$tenkh);

}
function showkhedit($id){ //xác định trả về một hay nhiều giá trị ?
    $sql = "select * from taikhoan where id=?";
    return result1(1,$sql,$id);
}
function updatekh($id,$user,$pass,$role,$imgupload,$email,$tenkh){
    if(!$imgupload)   {
        $sql = "UPDATE taikhoan SET name=?, password=?,role =?, email = ?,tenkh=?  WHERE id=?";
        return exec1($sql,$user,$pass,$role,$email,$tenkh,$id);  
    }else{
        $sql = "UPDATE taikhoan SET name=?, password=?,role =?, avatar = ?, email = ?,tenkh=? WHERE id=?";
        return exec1($sql,$user,$pass,$role,$imgupload,$email,$tenkh,$id);  
    }
   
}
function checkUser($user,$pass){
    $sql = "select * from taikhoan where name=? and password=?";
    return result1(1,$sql,$user,$pass);
    //tham số 1: trả về 1 giá trị,
    // $sql bằng câu sql ở trên
    // những tham số ở sau có thể có hoặc không
    // có bao nhiêu dấu ? thì truyền vào hàm bấy nhiên biến
}
function checkUserSignupAdmin($user,$pass){
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

function showHdCt($idhd){
    $sql = "SELECT * FROM hdchitiet WHERE idhd=".$idhd;
    return result1(1,$sql);
}