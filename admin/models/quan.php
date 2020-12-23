<?php 
function addQuan($diaChi,$tenQuan,$imgupload){
    $sql = "INSERT INTO quan(diachi,tenquan,img) VALUES(?,?,?)";
    return exec1($sql, $diaChi,$tenQuan,$imgupload);
}
function showAllQuan(){
    $sql = "SELECT * FROM quan WHERE 1";
    return result1(0,$sql);
}
function xoaQuan($id){
    $sql = "DELETE FROM quan WHERE id = ?";
    return exec1($sql,$id);
}
function showMotQuan($id){
    $sql = "SELECT * FROM quan WHERE id = ?";
    return result1(1,$sql,$id);
}
function updateQuan($id,$diaChi,$tenQuan,$imgupload){
    if(!$imgupload)   {
        $sql = "UPDATE quan SET diachi =?, tenquan=? WHERE id = ?";
        return exec1($sql, $diaChi,$tenQuan,$id);
    }else{
        $sql = "UPDATE quan SET diachi =?, tenquan=?,img=? WHERE id = ?";
        return exec1($sql, $diaChi,$tenQuan,$imgupload,$id);
    }
    
}
?>