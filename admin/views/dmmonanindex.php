<div class="col-lg-10">
    <div class="l-box-white">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between mt-3">
                <div class="col-lg-6 text-dark mt-3">
                    <?php
                    if (isset($_GET['act'])) {
                        switch ($_GET['act']) {
                            case 'doan':
                                $title = "ĐỒ ĂN";
                                break;
                            case 'douong':
                                $title = "ĐỒ UỐNG";
                                break;
                            case 'index':
                                $title = "MÓN ĂN";
                                break;
                            default:
                                # code...
                                break;
                        }
                    }
                    ?>
                    <h2>DANH MỤC <?= $title ?></h2>
                </div>
                <div class="col-lg-3 mt-3">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Danh Mục Món Ăn</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-lg-12 bg-white pb-4 border">
                    <div class="row d-flex justify-content-center">
                        <table class="table table-striped  w-100">
                            <thead class="thead-inverse">
                                <tr class="">
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Loại</th>
                                    <th>Xoá</th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>

                            <tbody id="result">
                                <?php
                                $i = 0;
                                foreach ($showAllDmMonAn as $dm) {
                                    $i++;
                                    $id = $dm['id'];
                                    if ($dm['loai'] == 0) $loai = 'Đồ Ăn';
                                    elseif ($dm['loai'] == 1) $loai = 'Thức Uống';
                                    else $loai = 'Ẩm Thực Vùng Miền';
                                    $linkdel = "index.php?ctrl=dmmonan&act=del&iddel=" . $id;
                                    $linkedit = "index.php?ctrl=dmmonan&act=add&idedit=" . $id;
                                ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><img width="100" src="<?= PATH_IMG_ADMIN . $dm['img'] ?>"></td>
                                        <td><?= $dm['name'] ?></td>
                                        <td><?= $loai ?></td>
                                        <td>
                                            <a onclick="checkDelete('<?php echo $linkdel; ?>')"><i class="fa fa-trash mr-3"></i></a>
                                        </td>
                                        <td>
                                            <a href="<?= $linkedit ?>"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>