<?php
    function addDmMonAn($tenDm,$imgupload,$loaiDm ){
        $sql = "INSERT INTO monan (name,img,loai) VALUES (?,?,?)";
        return exec1($sql,$tenDm,$imgupload,$loaiDm );
    }   

    function updateDmQuan($id,$tenDm,$imgupload,$loaiDm ){
        if(!$imgupload)   {
            $sql = "UPDATE monan SET  name=?, loai=? WHERE id=?";
            return exec1($sql,$tenDm,$loaiDm,$id);  
        }else{
            $sql = "UPDATE monan SET name=?,img =?, loai=? WHERE id=?";
            return exec1($sql,$tenDm,$imgupload,$loaiDm,$id);  
        }
    }
    function xoaDmQuan($id){
        $sql = "DELETE FROM monan WHERE id= ?";
        return exec1($sql,$id);
    }
    function showMotDmMa($id){
        $sql = "select * from monan where id=?";
        return result1(1,$sql,$id);
    }
    function showAllDmMonAn(){
        $sql = "SELECT * FROM monan ORDER BY id DESC";
        return result1(0,$sql);
    }
    function showAllDoAn() {
        $sql = "SELECT * FROM monan where loai = 0 ORDER BY id DESC";
        return result1(0,$sql);
    }
    function showAllDoUong() {
        $sql = "SELECT * FROM monan where loai = 1 ORDER BY id DESC";
        return result1(0,$sql);
    }
    function showAllAmThuc(){
        $sql = "SELECT * FROM monan where loai = 2 ORDER BY id DESC";
        return result1(0,$sql);
    }
?>