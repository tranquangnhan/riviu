<div class="col-lg-10">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-4 mt-3">
                <h2>MÓN ĂN</h2>
            </div>
            <div class="col-lg-4 mt-3">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Món ăn</a></li>
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
                            <h3 class="mt-4 text-center">THÊM DANH MỤC MÓN ĂN</h3>
                            <p class="text-center">Bạn có thể thêm danh mục món ăn ở đây!</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for=""><strong>Ảnh Danh Mục</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <img src="views/img/avt.png" alt="">
                                    <input type="file" class="form-control-file" name="avatar1[]" id="avatar1" multiple required
                                    >
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Danh Mục</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tendm" id="" class="form-control" placeholder="Tên Khách Hàng" aria-describedby="helpId" required>
                                </div>
                            </div>


                      

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Loại Danh Mục</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="loaidm" id="" required>
                                        <option selected value="">Loại</option>
                                        <option value="0">Đồ Ăn</option>
                                        <option value="1">Đồ Uống</option>
                                        <option value="2">Ẩm Thực Vùng Miền</option>
                                    </select>
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
                                                <input type="submit" name="them" id="" value="Thêm Món Ăn"
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