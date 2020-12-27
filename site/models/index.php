<?php 
// function checkdangnhap($us){
//     return laymot("SELECT * FROM taikhoan WHERE tendn = '$us'");
// }

function layDSTag() {
    $sql = "select * from tag";
    return result1(0,$sql);
}

function layImgTag($id) {
    $sql = "SELECT img FROM tag WHERE id = ? limit 1";
    return result1(1,$sql,$id);
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
    // exit("Select * from baiviet bv inner join taikhoan tk on bv.iduser = tk.id order by bv.id desc");
    return laydulieu("SELECT * FROM baiviet order by id DESC");
}

function searchTag($key) {
    return laydulieu("SELECT * FROM tag WHERE tentag LIKE '$key%'");
}

function searchQuan($key) {
    return laydulieu("SELECT id, tenquan FROM quan WHERE tenquan LIKE '$key%'");
    // print_r($dulieu) ;
}

function themrv($tieude, $noidung,$quan, $tag,$sao,$img,$iduser,$loaiMon) {
   $sql = "INSERT INTO baiviet(tieude,noidung,idquan,idhashtag,sao,img,iduser,idmonan)
    VALUES (?,?,?,?,?,?,?,?)";
    return exec1($sql,$tieude, $noidung,$quan, $tag,$sao,$img,$iduser,$loaiMon);
}

function getAllMonAn() {
    return laydulieu("SELECT * FROM monan order by id");
}

function getallDouong() {
    return laydulieu("SELECT * from monan where loai = 1");
}

function getBvByMon($idmon) {
    return laydulieu("SELECT * FROM `baiviet` WHERE idmonan = $idmon");
}

function getNameMon($id) {
    $name = laymot("SELECT name FROM monan WHERE id = $id");
    return $name['name'];
}

function getInfoQuan($idquan) {
    return laymot("Select * from quan where id = $idquan");
}

function getInfoTacgia($id) {
    return laymot("Select * from taikhoan where id = $id");
}

function getTagName($idtag) {
    return laymot("Select * from tag where id = $idtag");
}

function getImgmon($idmon) {
    $mon = laymot("select * from monan where id = $idmon");
    return $mon['img'];
}

function countLike($idbv) {
    $likeNumer = laymot("SELECT COUNT(*) as 'like' FROM likebv WHERE idbaiviet = $idbv");
    return $likeNumer['like'];
}

function checkLike($idbv, $iduser) {
    $isLike = laymot("SELECT COUNT(*) AS 'like' FROM likebv WHERE iduser = $iduser AND idbaiviet = $idbv");
    return $isLike['like'] == 1;
}

function like($idbv, $iduser) {
    // exit("INSERT INTO `likebv` (`iduser`, `idbaiviet`) VALUES ('$iduser', '$idbv');");
    return postdulieu("INSERT INTO `likebv` (`iduser`, `idbaiviet`) VALUES ('$iduser', '$idbv');");
}

function unlike($idbv, $iduser) {
    // exit("DELETE FROM likebv
    // WHERE iduser = $iduser AND idbaiviet=$idbv");
    return postdulieu("DELETE FROM likebv
    WHERE iduser = $iduser AND idbaiviet=$idbv");
}

function dangCmt($noidung, $idbv) {
    $iduser = $_SESSION['sid'];
    return postdulieu("INSERT INTO `binhluan` (`noidung`, `idbaiviet`, `iduser`) VALUES ('$noidung', '$idbv','$iduser');");
}

function countCmt($idbv) {
    $demCmt = laymot("SELECT COUNT(*) as tong FROM binhluan WHERE idbaiviet = $idbv");
    return $demCmt['tong'];
} 

function getAllComment($idbv) {
    return laydulieu("SELECT * FROM binhluan bl INNER JOIN taikhoan tk on bl.iduser = tk.id WHERE idbaiviet = $idbv");
}

function  searchByKey($key) {
    return laydulieu("SELECT * FROM `monan` WHERE name LIKE '%$key%' limit 5");
}
function loaiMonAn(){
    $sql ="SELECT id,name FROM monan ORDER BY id DESC";
    return result1(0,$sql); 
}
function getTacGia($idtg) {
    return laymot("SELECT name, avatar FROM taikhoan WHERE id = $idtg");
}

function getThongtin($id) {
    return laymot("SELECT * FROM taikhoan WHERE id = $id");
}

function changInfo($name, $username, $pass, $id) {
    return postdulieu("UPDATE `taikhoan` SET `name`='$username',`password`='$pass',`tenkh`='$name' WHERE id = $id");
}

function demSobv($idmon) {
    $tongbv = laymot("SELECT COUNT(*) as tong FROM baiviet WHERE idmonan = $idmon");
    return $tongbv['tong'];
}
?>