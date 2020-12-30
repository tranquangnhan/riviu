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
        array_push($tagList, gettag_($id)['tentag']);
    }
    return $tagList;
}

function getallBaiviet() {
    $sql ="SELECT * FROM baiviet order by id DESC";
    return result1(0,$sql);
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
    $sql = "SELECT * FROM monan WHERE loai = 0 ORDER BY id DESC";
    return result1(0,$sql);
}

function getallDouong() {
    $sql = "SELECT * FROM monan WHERE loai = 1 ORDER BY id ASC";
    return result1(0,$sql);
}
function getAllAmThuc()
{
    $sql = "SELECT * from monan where loai = 2 ORDER BY id DESC";
    return result1(0,$sql);
}

function getBvByMon($idmon) {
    $sql = "SELECT * FROM `baiviet` WHERE idmonan = ?";
    return result1(0,$sql,$idmon);
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
    $sql ="SELECT name, avatar FROM taikhoan WHERE id = ?";
    return result1(1,$sql,$idtg);
}

function getThongtin($id) {
    return laymot("SELECT * FROM taikhoan WHERE id = $id");
}


function demSobv($idmon) {
    $tongbv = laymot("SELECT COUNT(*) as tong FROM baiviet WHERE idmonan = $idmon");
    return $tongbv['tong'];
}

function refreshLike($idbv) {
    $like = laymot("SELECT COUNT(*) as tong FROM likebv WHERE idbaiviet = $idbv");
    return $like['tong'];
}

function getallBaiviet_($type) {
    return laydulieu("SELECT * FROM `baiviet` WHERE idmonan IN (SELECT id FROM monan WHERE loai= $type)");
}

function addTag($tag){
    $sql ="INSERT INTO tag(tentag) VALUES(?)";  
    return lastIdInsert($sql,$tag);
}
function themQuanAjax($diachi,$tenquan,$img){
    $sql = "INSERT INTO quan(diachi,tenquan,img) VALUES(?,?,?)";
    return lastIdInsert($sql,$diachi,$tenquan,$img);
}
function showNhieuAnh($idbv) {
    $anhArr = laymot("SELECT img FROM `baiviet` WHERE id = $idbv");
    if($anhArr['img']!=null) {
    $anhlist = explode(',',$anhArr['img']);
    switch (count($anhlist)) {
        case '1':
            return print('<div class="boxcontent-img mt-2 type1">
            <div class="container-type1">
                <div class="bg">
                    <img src="./uploads/'.$anhlist[0].'" alt="">
                </div>
            </div>
            </div>');
            break;
        case '2':
            return print('<div class="boxcontent-img mt-2 type2">
            <div class="container-type1">
                <div class="bg">
                    <img src="./uploads/'.$anhlist[0].'" alt="">
                    <img src="./uploads/'.$anhlist[1].'" alt="">
                </div>
            </div>
            </div>');
            break;
        case '3':
            return print('<div class="boxcontent-img mt-2 type3">
            <div class="container-type1">
                <div class="bg">
                    <img src="./uploads/'.$anhlist[0].'" alt="">
                    <img src="./uploads/'.$anhlist[1].'" alt="">
                    <img src="./uploads/'.$anhlist[2].'" alt="">
                </div>
            </div>
            </div>');
            break;
        case '4':
            return print('<div class="boxcontent-img mt-2 type4">
            <div class="container-type1">
                <div class="bg">
                    <img src="./uploads/'.$anhlist[0].'" alt="">
                    <img src="./uploads/'.$anhlist[1].'" alt="">
                    <img src="./uploads/'.$anhlist[2].'" alt="">
                    <img src="./uploads/'.$anhlist[3].'" alt="">
                </div>
            </div>
            </div>');
            break;
        default:
            return print('<div class="boxcontent-img mt-2 type5">
            <div class="container-type1">
                <div class="bg">
                    <img src="./uploads/'.$anhlist[0].'" alt="">
                    <img src="./uploads/'.$anhlist[1].'" alt="">
                    <img src="./uploads/'.$anhlist[2].'" alt="">
                    <img src="./uploads/'.$anhlist[3].'" alt="">
                    <img src="./uploads/'.$anhlist[4].'" alt="">
                </div>
            </div>
            </div>');
            break;
        }
    }
}

function getBvByNguoidang($idnguoidang) {
    return laydulieu("SELECT * FROM `baiviet` WHERE iduser = $idnguoidang");
}
