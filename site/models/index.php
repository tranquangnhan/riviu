<?php 
// function checkdangnhap($us){
//     return laymot("SELECT * FROM taikhoan WHERE tendn = '$us'");
// }

function layDSTag() {
    $sql = "select * from tag";
    return result1(0,$sql);
}

function layImgTag($id) {
    return laymot("SELECT img FROM tag WHERE id = $id limit 1");
}

function layDanhgiaChitiet($id) {
    return laymot("SELECT * FROM baiviet bv inner join taikhoan tk on bv.iduser = tk.id WHERE bv.id = $id");
}

function getQuanById($id) {
    return laymot("Select * from quan where id = $id");
}

function gettag_($id) {
    return laymot("Select * from tag where id = $id") ;
}

function gettag($id) {
    $tagList = array();
    $idList = explode(",",$id);
    foreach ($idList as $id) {
        // print_r(gettag_($id));
        array_push($tagList, gettag_($id)['tentag']);
    }
    return $tagList;
}

function getallBaiviet() {
    return laydulieu("Select * from baiviet bv inner join taikhoan tk on bv.iduser = tk.id order by bv.id desc");
}

function searchTag($key) {
    return laydulieu("SELECT * FROM tag WHERE tentag LIKE '$key%'");
}

function searchQuan($key) {
    return laydulieu("SELECT id, tenquan FROM quan WHERE tenquan LIKE '$key%'");
    // print_r($dulieu) ;
}

function themrv($tieude, $noidung,$quan, $tag,$sao,$img,$iduser) {
    return postdulieu("INSERT INTO baiviet(tieude,noidung,idquan,idhashtag,sao,img,iduser) 
    VALUES ('$tieude','$noidung','$quan','$tag','$sao','$img','$iduser')");
}

function getAllMonAn() {
    return laydulieu("SELECT * FROM monan order by id");
}

function getallDouong() {
    return laydulieu("SELECT * from monan where loai = 0");
}

function getBvByMon($idmon) {
    return laydulieu("SELECT * FROM `baiviet` WHERE idmonan = $idmon");
}

function getNameMon($id) {
    $name = laymot("SELECT name FROM monan WHERE id = $id");
    return $name['name'];
}
?>