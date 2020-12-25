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
                        <li class="breadcrumb-item"><a href="#">Thêm </a></li>
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
                            <h3 class="mt-4 text-center">THÊM TÀI KHOẢN</h3>
                            <p class="text-center">Bạn có thể thêm tài khoản ở đây!</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for=""><strong>Ảnh tài khoản</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <img src="views/img/avt.png" alt="">
                                    <input type="file" class="form-control-file" name="avatar1[]" id="avatar1" multiple required
                                    >
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Khách Hàng</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tenkh" id="" class="form-control" placeholder="Tên Khách Hàng" aria-describedby="helpId" required>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Đăng Nhập</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tenuser" id="" class="form-control" placeholder="Tên Đăng Nhập" aria-describedby="helpId" required>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Mật Khẩu</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="pass" id="" class="form-control" placeholder="Nhập Mật Khẩu" required>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Vai Trò</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="vaitro" id="" required>
                                        <option selected value="">Vai Trò</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Sub-Admin</option>
                                        <option value="3">Khách Hàng</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Email</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="email" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId" required>
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
                                                <input type="submit" name="them" id="" value="Thêm User"
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