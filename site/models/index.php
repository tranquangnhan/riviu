<?php 
function checkdangnhap($us){
    return laymot("SELECT * FROM taikhoan WHERE tendn = '$us'");
}

function laymonan() {
    $sql = "select * from monan";
    return result1(0,$sql);
}

function layImgMonAn($idmon) {
    return laymot("SELECT img FROM baiviet WHERE idmon = $idmon limit 1");
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

function themrv($tieude, $noidung, $tag, $diadiem, $vitri, $danhgia) {
    return postdulieu("INSERT INTO baiviet(tieude,noidung,idquan,idmon,idhashtag,sao) VALUES ($tieude,$noidung,$diadiem,$tag,$danhgia);");
}
?>