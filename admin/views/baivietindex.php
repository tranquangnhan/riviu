<div class="col-lg-10">
    <div class="l-box-white">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between mt-3">
                <div class="col-lg-4 text-dark mt-3">
                    <h2>BÀI VIẾT</h2>
                </div>
                <div class="col-lg-3 mt-3">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Bài Viết</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-lg-12 bg-white pb-4 border">
                    <div class="row d-flex justify-content-center">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>ID</th>
                                    <th width="100">Ảnh</th>
                                    <th width="200">Tiêu Đề</th>
                                    <th>Người Đăng</th>
                                    <th width="450">Nội Dung</th>
                                    <th >Ngày Đăng</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody >
                                <?php
                                    $stt = 0;
                                foreach ($showAllBlog as $motbl) {
                                    $id = $motbl['id'];
                                    $stt++;
                                    $img = PATH_IMG_ADMIN.explode(",",$motbl['img'])[0];
                                    // if(is_file($img)) $img = $img;else $img = "nothing";
                                    $tieuDe = $motbl['tieude'];
                                    $noiDung = $motbl['noidung'];
                                    $nguoiDang = showTenKh($motbl['iduser']);
                                    $ngayDang = $motbl['ngaydang'];
                                    $linkdel = "index.php?ctrl=baiviet&act=del&iddel=".$id;       
                                ?>
                                <tr>
                                    <td><?=$stt?></td>
                                    <td width="100"><img width="100" src="<?=$img?>"></td>
                                    <td class="ten" width="200"><a href="<?=$linkedit?>"><?=substr($tieuDe,0,52)?></a> </td>      
                                    <td><?=$nguoiDang?></td>
                                    <td class="noidung"> <?=substr($noiDung,0,100)?></td>                                                                       
                                  
                                    <td ><?=$ngayDang?></td>
                                    <td>
                                        <a onclick="checkDelete('<?php echo $linkdel; ?>')"><i class="fa fa-trash mr-3" ></i></a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
