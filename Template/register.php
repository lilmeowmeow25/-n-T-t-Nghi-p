<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng ký thành viên</title>
    <link href="./css/alert.css" rel="stylesheet">
    <link href="./css/register.css" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <div class="alert" name="alert"></div>
      <div class="form">
        <h3 class="heading">Thành viên đăng ký</h3>
        <div class="spacer"></div>
          <div class="form-group">
            <label for="fullname" class="form-label">Họ và tên:</label>
              <input type="text" name="name" placeholder="vui lòng nhập họ và tên" class="form-control">
          </div>
          <div class="form-group">
            <label for="fullname" class="form-label">Tên đăng nhập</label>
              <input type="text" name="username" placeholder="vui lòng nhập tài khoản" class="form-control">
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id ="email" type="text" name="email" placeholder="VD: email@domain.com" class="form-control">
          </div>
          <div class="form-group">
            <label for="phone" class="form-label">Phone:</label>
            <input id ="phone" type="text" name="phone" placeholder="VD: email@domain.com" class="form-control">
          </div>
          <div class="form-group">
            <label for="idcar" class="form-label">Số Khung:</label>
            <input id ="idcar" type="text" name="idcar" placeholder="VD: email@domain.com" class="form-control">
          </div>
          <div class="form-group">
            <label for="address" class="form-label">Địa Chỉ:</label>
            <input id ="address" type="text" name="address" placeholder="VD: email@domain.com" class="form-control">
          </div>
          <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password"name="password" placeholder="Nhập mật khẩu" class="form-control">
          </div>

          <div class="form-group">
            <label for="password" class="form-label">Nhập lại mật khẩu</label>
            <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" class="form-control">
          </div>
          <div class="form-group">
              <div class="submit" colspan ="2">
                <button class="form-submit" name="register">Đăng ký</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-1.12.4.min.js"></script> 
  <script src="./js/register.js"></script>
</body>
</html>