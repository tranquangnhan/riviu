<?php
define('HOST_DB','remotemysql.com');
define('NAME_DB','uwGquv10xB');
define('USER_DB','uwGquv10xB');
define('PASS_DB','iUBtJunPJq');
define('ROOT_URL','');
define('ADMIN_URL',ROOT_URL.'/admin');
define('SITE_URL',ROOT_URL.'/site/');   
define('SYSTEM_PATH',ROOT_URL.'/system');
define('PAGE_SIZE',6);
define('PATH_IMG_SITE','uploads/');
define('PATH_IMG_ADMIN','../uploads/');
date_default_timezone_set("Asia/Bangkok");

function ketnoidb()
{
    try {
        $ConnectionOption = array
            (
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            );

        $conn = new PDO ('mysql:host='.HOST_DB.';dbname='.NAME_DB.';charset=utf8', USER_DB, PASS_DB, $ConnectionOption);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
      echo "Lỗi Kết Nối database: " . $e->getMessage();
    }
}
    function laydulieu($sql)   {
        $fe=0;
        $sqlValue = array_slice(func_get_args(),2);
        try {
            $conn = ketnoidb(); //connect database
            $stmt = $conn->prepare($sql); // select * from sanpham where id = ?
            $stmt->execute($sqlValue);// thực thi

            // echo '<pre>';
            // print_r($stmt -> debugDumpParams());
            // echo '</pre>';
            // echo '---------------------------------------------------------------------<br>'.PHP_EOL;

            if($fe===0)return $stmt->fetchAll();elseif($fe===1)return $stmt->fetch(PDO::FETCH_ASSOC);// nếu tham số đầu tiên ===0 trả về tất cả sản phẩm, === 1 trả về 1 sản phẩm
            
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
        finally{
            unset($conn);
        }
    }
    function laymot($sql) {
        $fe=1;
        $sqlValue = array_slice(func_get_args(),2);
        try {
            $conn = ketnoidb(); //connect database
            $stmt = $conn->prepare($sql); // select * from sanpham where id = ?
            $stmt->execute($sqlValue);// thực thi

            // echo '<pre>';
            // print_r($stmt -> debugDumpParams());
            // echo '</pre>';
            // echo '---------------------------------------------------------------------<br>'.PHP_EOL;

            if($fe===0)return $stmt->fetchAll();elseif($fe===1)return $stmt->fetch(PDO::FETCH_ASSOC);// nếu tham số đầu tiên ===0 trả về tất cả sản phẩm, === 1 trả về 1 sản phẩm
            
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
        finally{
            unset($conn);
        }
    }
    function postdulieu($sql) {
        $conn = ketnoidb();
        $result = $conn ->exec($sql);
        return $result;
    }
    function getlastid($sql){
        $conn = ketnoidb();
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
    }
    
    function postdulieulayid($sql) {
        $conn = ketnoidb();
        $result = $conn ->exec($sql);
        $lastid=$conn->lastInsertId();
        return $lastid;
    }

// hàm này có chức năng truy vấn dữ liệu
// truyền vào 2 hoặc nhiều hơn các giá trị
// tham số đầu tiên: 0 là trả về tất cả sản phẩm, 1 là chỉ trả về 1 sản phẩm
// tham số thứ 2 là câu sql
function result1($fe,$sql){ 
    $sqlValue = array_slice(func_get_args(),2);
    try {
        $conn = ketnoidb(); //connect database
        $stmt = $conn->prepare($sql); // select * from sanpham where id = ?
        $stmt->execute($sqlValue);// thực thi
        if($fe===0)return $stmt->fetchAll();elseif($fe===1)return $stmt->fetch(PDO::FETCH_ASSOC);// nếu tham số đầu tiên ===0 trả về tất cả sản phẩm, === 1 trả về 1 sản phẩm
        
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
    finally{
        unset($conn);
    }
}
function SqlSelectDebug($fe,$sql){
    $sqlValue = array_slice(func_get_args(),2);
    try {
        $conn = ketnoidb(); //connect database
        $stmt = $conn->prepare($sql); // select * from sanpham where id = ?
        $stmt->execute($sqlValue);// thực thi
            
        echo '<pre>';
        print_r($stmt -> debugDumpParams());
        echo '</pre>';
        echo '---------------------------------------------------------------------<br>'.PHP_EOL;

        if($fe===0)return $stmt->fetchAll();elseif($fe===1)return $stmt->fetch(PDO::FETCH_ASSOC);// nếu tham số đầu tiên ===0 trả về tất cả sản phẩm, === 1 trả về 1 sản phẩm
        
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
    finally{
        unset($conn);
    }
}
function exec1($sql){//thêm, xoá ....
    $sqlValue = array_slice(func_get_args(),1); 

    try {
        $conn = ketnoidb(); //connect database
        
        $stmt = $conn->prepare($sql); // select * from sanpham where id = ?
        $stmt->execute($sqlValue);// thực thi

        return true;
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
function SqlExecDebug($sql){//thêm, xoá ....
    $sqlValue = array_slice(func_get_args(),1); 

    try {
        $conn = ketnoidb(); //connect database
        
        $stmt = $conn->prepare($sql); // select * from sanpham where id = ?

        echo '<pre>';
        print_r($stmt -> debugDumpParams());
        echo '</pre>';
        print_r($sqlValue);
        echo '---------------------------------------------------------------------<br>'.PHP_EOL;

        $stmt->execute($sqlValue);// thực thi

       
        return true;
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}

function lastIdInsert($sql){
    $sqlValue = array_slice(func_get_args(),1);
    try {
        $conn =  ketnoidb(); //connect database

        $stmt = $conn->prepare($sql); // select * from sanpham where id = ?

        $stmt->execute($sqlValue);// thực thi

        $last_id = $conn->lastInsertId();
        return $last_id;
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>