<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/alert.css" rel="stylesheet">
    <link href="./css/register.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="container">
      <div class="alert" name="alert"></div>
      <div class="form">
        <h3 class="heading">Thành viên đăng nhập</h3>
        <div class="spacer"></div>
          <div class="form-group">
          <label for="fullname" class="form-label">Tên đăng nhập</label>
              <input type="text" id="username" name="username" placeholder="vui lòng nhập tài khoản" class="form-control">
          </div>

          <div class="form-group">
          <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" id = "password" name="password" placeholder="Nhập mật khẩu" class="form-control">
          </div>
          <div class="form-group">
              <div class="submit" colspan ="2">
                <button class="form-submit" name="login">Đăng nhập</button>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
  <script src="js/jquery-1.12.4.min.js"></script> 
  <script src="./js/login.js"></script>
  
</body>
</html>