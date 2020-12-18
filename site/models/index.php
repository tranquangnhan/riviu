<?php 
function checkdangnhap($us){
    return laymot("SELECT * FROM taikhoan WHERE tendn = '$us'");
}

function laymonan() {
    return laydulieu("select * from monan");
}

function layImgMonAn($idmon) {
    return laymot("SELECT img FROM baiviet WHERE idmon = $idmon limit 1");
}
?>