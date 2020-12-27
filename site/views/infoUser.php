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

      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Sửa thông tin</h5>
        </div>
        <div class="card-body">
          <form method="POST" action="index.php?act=changeinfo">
            <div class="row">
              <style>
                img {
                  margin-left: 50%;
                  transform: translateX(-50%);
                  border-radius: 50%;
                  margin-bottom: 10px;
                }
              </style>
              <img src="./uploads/<?= $thongtin['avatar'] ?>" alt="">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Họ tên</label>
                  <input type="text" name="hoten" class="form-control" value="<?= $thongtin['tenkh'] ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tên đăng nhập</label>
                  <input type="text" name="username" class="form-control" value="<?= $thongtin['name'] ?>">
                </div>
              </div>
              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label>Bạn muốn đổi mật khẩu?</label>
                  <input type="checkbox" name="" id="doimk"></div>
              </div>
              <div class="col-md-12 changepass">
                <div class="form-group">
                  <label>Mật khẩu</label>
                  <input id="pass" type="password" name="pass" class="form-control" value="<?= $thongtin['password'] ?>">
                </div>
              </div>
              <div class="col-md-12 changepass" id="repass">
                <div class="form-group">
                  <label>Nhập lại mật khẩu</label>
                  <input type="password" name="repass" class="form-control" placeholder="Xác nhận mật khẩu mới">
                </div>
              </div> -->
            </div>
            <input type="hidden" name="idus" value="<?= $thongtin['id'] ?>">
            <div class="row">
              <div class="update ml-auto mr-auto">
                <input name="submit" type="submit" value="Cập nhật thông tin" class="btn btn-primary btn-round">
                <!-- <button type="submit" class="btn btn-primary btn-round">Cập nhật thông tin</button> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>