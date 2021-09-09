<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng ký thành viên</title>
    <link href="./css/alert.css" rel="stylesheet">
    <link href="./css/register.css" rel="stylesheet">
    <link href="css/lecker_library.css" rel="stylesheet">

<!-- Icons CSS -->
<link href="fonts/themify-icons.css" rel="stylesheet">
<link href="fonts/selima/stylesheet.css" rel="stylesheet">

<!-- Theme CSS -->
<link href="css/lecker_style.css" rel="stylesheet">

<!-- Google Fonts -->
<!-- <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Lato|Monoton" rel="stylesheet"> -->
</head>
<body>
<div class="main-panel">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h2 class="title">Biểu Mẫu Đăng Ký Lái Thử Xe</h2>
                        </div>
                        <div class="content">
                        <div class="alert" name="alert"></div>
                            <div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Company </label>
                                            <input type="text" class="form-control" disabled  placeholder="Home Address" value="Công Ty TNHH SupperCars" name="company">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="carname" class="form-label">Tên xe:</label>
                                            <input type="text" name="carname" placeholder="vui lòng nhập tên xe" class="form-control">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="idcar" class="form-label">Mã Khung:</label>
                                            <input id ="idcar" type="text" name="idcar" placeholder="VD: email@domain.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="price" class="form-label">Giá:</label>
                                            <input id ="price" type="text" name="price" placeholder="VD: email@domain.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="sale" class="form-label">Giá khuyến mãi:</label>
                                          <input id ="sale" type="text" name="sale" placeholder="VD: email@domain.com" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="brand">Nhãn Hàng:</label>
                                            <input class="form-control form-label"id ="brand"  name="brand"  >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="level">Dòng xe:</label>
                                        <input class="form-control form-label"id ="level"  name="level"  >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="satatus">Trạng thái:</label>
                                            <input class="form-control form-label" name="satatus" id="satatus">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="sit">Chỗ ngồi:</label>
                                           <input id ="sit" type="text" name="sit" placeholder="VD: email@domain.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="hopso" class="form-label">Hộp số:</label>
                                            <input id ="hopso" type="text" name="hopso" placeholder="VD: email@domain.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="dongco">Động cơ:</label>
                                            <input id ="dongco" type="text" name="dongco" placeholder="VD: email@domain.com" class="form-control">                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Chọn hình:</label>
                                            <input  type="file" name="img" id="img">                                        
                                        </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="submit" colspan ="2">
                                        <button class="form-submit" name="addCar">Đăng ký</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
    </div>
  </div>
  <script src="js/jquery-1.12.4.min.js"></script> 
  <script src="./js/addCar.js"></script>
</body>
</html>