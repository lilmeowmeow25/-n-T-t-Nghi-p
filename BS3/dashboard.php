<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    <div class="sidebar-wrapper">
            <div class="logo">
                <a href="/BS3/dashboard.php" class="simple-text">
                    CarDealer
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li >
                    <a href="table_product.php">
                        <i class="pe-7s-car"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li >
                    <a href="orderlist.php">
                        <i class="pe-7s-note2"></i>
                        <p>Contract</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content styple">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Thống kê đơn đăng ký</h4>
                                <p class="category">1 Tháng Qua</p>
                                <!-- <p class="category">Last Campaign Performance</p> -->
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Hoàn Thành
                                        <i class="fa fa-circle text-danger"></i> Đang Tiến Hành
                                        <i class="fa fa-circle text-warning"></i> Hủy Đơn 
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Hiệu Suất</h4>
                                <p class="category">1 Tháng Qua</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i>  Hoàn Thành
                                        <i class="fa fa-circle text-danger"></i> Đang Tiến Hành
                                        <i class="fa fa-circle text-warning"></i> Hủy Đơn 
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">

                    <div class="col-md-6">
                        <div class="card " style="height: 800px;">
                            <div class="header">
                                <h4 class="title">Todo list</h4>
                                <p class="category">Giám sat công việc hằng ngày</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <div class="table">
                                        <tbody>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="todo_list">
                                                        <div class="alert" name="alert"></div>
                                                        <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="name" class="form-label">Tên:</label>
                                                                        <input id ="name" type="text" name="name" placeholder="VD: email@domain.com" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>  
                            
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="do1" class="form-label">Nội dung:</label>
                                                                        <input id ="do1" type="text" name="do1" placeholder="VD: email@domain.com" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="do2" class="form-label">Nội dung:</label>
                                                                        <input id ="do2" type="text" name="do2" placeholder="VD: email@domain.com" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>  
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="do3" class="form-label">Nội dung:</label>
                                                                        <input id ="do3" type="text" name="do3" placeholder="VD: email@domain.com" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>  
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="do4" class="form-label">Nội dung:</label>
                                                                        <input id ="do4" type="text" name="do4" placeholder="VD: email@domain.com" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>      
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="do4" class="form-label">Nội dung:</label>
                                                                        <input id ="do4" type="text" name="do4" placeholder="VD: email@domain.com" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>  
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="do5" class="form-label">Nội dung:</label>
                                                                        <input id ="do5" type="text" name="do5" placeholder="VD: email@domain.com" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>  
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="do6" class="form-label">Nội dung:</label>
                                                                        <input id ="do6" type="text" name="do6" placeholder="VD: email@domain.com" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>  

                                                            <div class="form-group">
                                                                <div class="submit" colspan ="2">
                                                                    <button class="form-submit" name="todolist">Đăng ký</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tbody>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer" style=" position: absolute; top: 1400px;left: 260px;width:100%">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>

    </div>
</div>



</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
<script src="./js/todolist.js"></script>
</html>
