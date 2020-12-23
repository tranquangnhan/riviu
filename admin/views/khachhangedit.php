<?php if(is_array($showkhedit)){
?>
<div class="col-lg-10">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-4 mt-3">
                <h2>KHÁCH HÀNG</h2>
            </div>
            <div class="col-lg-4 mt-3">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Khách Hàng</a></li>
                        <li class="breadcrumb-item"><a href="#">Sửa </a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-lg-12 bg-white pb-4 border">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h3 class="mt-4 text-center">THÊM Khách Hàng</h3>
                            <p class="text-center">Bạn có thể thêm khách hàng ở đây!</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for=""><strong>Ảnh Khách Hàng</strong></label>
                                </div>
                               
                                <div class="col-lg-9">
                                    <img width="150" src=" <?=PATH_IMG.$showkhedit['avatar']?>" alt="">
                                    <input type="file" class=" mt-3 form-control-file" name="avatar1[]" id="avatar1" multiple >
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Khách Hàng</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tenkh" id="" value="<?=$showkhedit['tenkh']?>" class="form-control" placeholder="Tên Khách Hàng" aria-describedby="helpId" required>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Đăng Nhập</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tenuser" id="" value="<?=$showkhedit['name']?>" class="form-control" placeholder="Tên Đăng Nhập" aria-describedby="helpId" required>
                                </div>
                            </div>
    
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Mật Khẩu</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="pass" value="<?=$showkhedit['password']?>" id="" class="form-control" placeholder="Nhập Mật Khẩu" required>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Vai Trò</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="vaitro" id="" required>
                                        <?php
                                            if($showkhedit['role'] == 0){
                                                $khachHang = 'selected';
                                                $admin = '';
                                            }else{
                                                $admin = 'selected';
                                                $khachHang = '';
                                            }
                                        ?>
                                        <option value="1" <?=$admin?>>Admin</option>
                                        <option value="0" <?=$khachHang?>>Khách Hàng</option>
                                    </select>
                                </div>
                            </div>

                     
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Email</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="email" name="email" id="" value="<?=$showkhedit['email']?>" class="form-control" placeholder="Địa Chỉ" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9 ">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <a href="index.php?ctrl=loaihang&act=index"> <input type="button" name="" id="" value="Huỷ" class="btn btn-cancel"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 pr-2 mr-2">
                                            <div class="form-group">
                                                <input type="submit" name="them" id="" value="Sửa Khách Hàng"
                                                    class="btn btn-submit text-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
}else{
    echo 'không có khách hàng này';  
}
?>