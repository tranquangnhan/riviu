<?php
    function addDmMonAn($tenDm,$imgupload,$loaiDm ){
        $sql = "INSERT INTO monan (name,img,loai) VALUES (?,?,?)";
        return exec1($sql,$tenDm,$imgupload,$loaiDm );
    }   

    function updateDmQuan($id,$tenDm,$imgupload,$loaiDm ){
        if(!$imgupload)   {
            $sql = "UPDATE taikhoan SET  SET name=?, loai=? WHERE id=?";
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
?>