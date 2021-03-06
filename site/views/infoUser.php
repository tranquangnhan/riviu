  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="site/views/css/bootstrap.min.css" rel="stylesheet" />
  <link href="site/views/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  </head>
  <style>
    .changepass {
      display: none;
    }
  </style>
  <div class="container d-flex justify-content-center">
    <div class="col-6 ">
      <?php
      if (isset($_SESSION['tbtype'])) {
          echo '<div class="alert alert-danger" role="alert">' .
            $_SESSION['tb']
            . '</div>';
          unset($_SESSION['tb']);
          unset($_SESSION['tbtype']);
      } else {
        if (isset($_SESSION['tb'])) {
          echo '<div class="alert alert-primary" role="alert">' .
            $_SESSION['tb']
            . '</div>';
          unset($_SESSION['tb']);
        }
      }
      ?>
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Sửa thông tin</h5>
        </div>
        <div class="card-body">
          <form method="POST" id="changInfo" action="index.php?act=changeinfo" enctype="multipart/form-data">
            <div class="row">
              <style>
                img {
                  margin-left: 50%;
                  transform: translateX(-50%);
                  border-radius: 50%;
                  margin-bottom: 10px;
                }
              </style>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="avt" class="labelavt">
                    <img width="130" height="130" style="object-fit:cover" src="<?php if (is_file(PATH_IMG_SITE . $thongtin['avatar'])) echo PATH_IMG_SITE . $thongtin['avatar'];
                                                                                else echo PATH_IMG_SITE . 'logo.png'; ?>" alt="">
                  </label>
                  <input type="file" name="avt[]" id="avt" class="form-control">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>Tên đăng nhập</label>
                  <input disabled type="text" name="username" class="form-control" value="<?= $thongtin['name'] ?>" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Họ tên</label>
                  <input type="text" name="hoten" class="form-control" value="<?= $thongtin['tenkh'] ?>" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" value="<?= $thongtin['email'] ?>" required>
                </div>
              </div>
              <div class="col-md-12 ">
                <div class="form-group">
                  <label>Mật khẩu</label>
                  <input id="pass" type="password" name="pass" class="form-control" placeholder="Nhập mật khẩu mới">
                  <small>Bỏ qua nếu bạn không muốn đổi mật khẩu</small>
                </div>
              </div>
              <div class="col-md-12 " id="repass">
                <div class="form-group">
                  <label>Nhập lại mật khẩu</label>
                  <input type="password" name="repass" class="form-control" placeholder="Xác nhận mật khẩu mới">
                  <small>Bỏ qua nếu bạn không muốn đổi mật khẩu</small>
                </div>
              </div>
            </div>
            <input type="hidden" name="idus" value="<?= $thongtin['id'] ?>">
            <div class="row">
              <div class="update ml-auto mr-auto">
                <input name="submit" type="submit" value="Cập nhật thông tin" class="btn btn-primary btn-round">
                <!-- <a href="?act=changepass" class="btn btn-outline-primary btn-round">Đổi mật khẩu</a> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>