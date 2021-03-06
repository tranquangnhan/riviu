<?php
session_start();
function checkuser($name, $password, $remember)
{
    if ($remember) {
        $_COOKIE['sessionId'] = session_id();
    } else {
        unset($_COOKIE);
    }
    $name = str_replace(";", "", $name);
    $name = str_replace("'", "", $name);
    $name = str_replace('"', "", $name);
    $password = str_replace(";", "", $password);
    $password = str_replace("'", "", $password);
    $password = str_replace('"', "", $password);
    $name = addslashes($name);
    $password = addslashes($password);
    $sql = "select * from taikhoan where name=? and password=?";
    $user = result1(1, $sql, $name, $password);
    if (is_array($user)) {
        $_SESSION['sid'] = $user['id'];
        $_SESSION['sname'] = $user['name'];
        $_SESSION['role'] = $user['role'];
        return true;
    } else {
        return false;
    }
}
function checkuserSignup($name, $password)
{
    $name = str_replace(";", "", $name);
    $name = str_replace("'", "", $name);
    $name = str_replace('"', "", $name);
    $password = str_replace(";", "", $password);
    $password = str_replace("'", "", $password);
    $password = str_replace('"', "", $password);
    $name = addslashes($name);
    $password = addslashes($password);
    $sql = "select * from taikhoan where name=? and password=?";
    $name = result1(1, $sql, $name, $password);
    if (is_array($name)) {
        $_SESSION['sid'] = $name['id'];
        $_SESSION['sname'] = $name['name'];
        $_SESSION['role'] = $name['role'];
        return true;
    } else {
        return false;
    }
}
function IsExist($name)
{ // kiểm tra xem name đã tồn tại hay chưa
    $sql = "select * from taikhoan where name=?";
    return result1(1, $sql, $name);
}

function checkEmailTonTai($email)
{
    $sql = "select * from taikhoan where email=?";
    return result1(1, $sql, $email);
}
function addUser($userName, $passWord)
{
    $sql = "INSERT INTO taikhoan (name,password) VALUES (?,?)";
    return exec1($sql, $userName, $passWord);
}

function changInfo($name, $email, $pass, $repass, $avt, $id)
{
    // Truong hop doi pass
    if ($pass & $repass) {
        var_dump($pass);
        if ($pass == $repass && $pass != "" && $repass != "") {
            if (!$avt) {
                $sql = "UPDATE `taikhoan` SET `password`=?,email=?,tenkh=? WHERE id = ?";
                $_SESSION['tb'] = "Đã đổi mật khẩu và thông tin của bạn";
                return exec1($sql, $pass, $email, $name, $id);
            } else {
                $sql = "UPDATE `taikhoan` SET `password`=?,avatar=?,email=?,tenkh=? WHERE id = ?";
                $_SESSION['tb'] = "Đã đổi mật khẩu và thông tin của bạn";
                return exec1($sql, $pass, $avt, $email, $name, $id);
            }
        }else {
            $_SESSION['tb'] = "Đổi thất bại, mật khẩu không khớp hoặc để trống";
            $_SESSION['tbtype'] = 0;
        }
    } else {
        //Khồng đổi pass
        if (!$avt) {
            $sql = "UPDATE `taikhoan` SET email=?,tenkh=? WHERE id = ?";
            $_SESSION['tb'] = "Đã đổi thông tin của bạn";
            return exec1($sql, $email, $name, $id);
        } else {
            $sql = "UPDATE `taikhoan` SET avatar=?,email=?,tenkh=? WHERE id = ?";
            $_SESSION['tb'] = "Đã đổi thông tin của bạn";
            return exec1($sql, $avt, $email, $name, $id);
        }
    }
}
