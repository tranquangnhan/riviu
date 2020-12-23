<div class="col-lg-10">
    <div class="l-box-white">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between mt-3">
                <div class="col-lg-4 text-dark mt-3">
                    <h2>QUÁN ĂN</h2>
                </div>
                <div class="col-lg-3 mt-3">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Quán ăn</a></li>
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
                                    <th>Địa Chỉ</th> 
                                    <th>Xoá</th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>

                            <tbody id="result">
                                        <?php
                    $i=0;
                    foreach ($showAllQuan as $quan) {
                        $i++;
                        $id=$quan['id'];
                
                        $linkdel = "index.php?ctrl=quan&act=del&iddel=".$id;
                        $linkedit = "index.php?ctrl=quan&act=add&idedit=".$id;        
                    ?>
                    <tr>
                        <td><?=$i?></td>  
                        <td><img width="150" src="<?=PATH_IMG.$quan['img']?>"></td>
                        <td><?=$quan['tenquan']?></td>
                        <td><?=$quan['diachi']?></td>
                        <td>
                            <a onclick="checkDelete('<?php echo $linkdel; ?>')"><i class="fa fa-trash mr-3" ></i></a></td>
                        <td>
                            <a href="<?=$linkedit?>"><i class="fa fa-edit"></i></a>
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