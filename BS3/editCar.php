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

        <!-- custom -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="style.css">
        <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );id="example_filter"
    </script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/BS3/dashboard.html" class="simple-text">
                    CarDealer
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Contract</p>
                    </a>
                </li>
                <li class="active">
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>User List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
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
                    <a class="navbar-brand" href="table_product.php">Table List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

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
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main-panel">

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h2 class="title">Chỉnh Sửa Xe</h2>
                                </div>
                                <?php
                                  $id=$_GET['id'];
                                  echo " <form action='editCar_submit.php?id=".$id."' method='post'>";
                                
                                      
                                      $conn = mysqli_connect("localhost","root","","vidu");

                                      mysqli_set_charset($conn,"utf8");

                                      $sql ="SELECT * FROM `product` WHERE id =$id";

                                      $result = $conn ->query($sql)-> fetch_assoc();

                                      echo"
                                        <div class='content' >
                                          <div>
                                              <div class='row'>
                                                  <div class='col-md-5'>
                                                      <div class='form-group'>
                                                          <label>Company </label>
                                                          <input type='text' class='form-control' disabled  placeholder='Home Address' value='Công Ty TNHH SupperCars' name='company'>
                                                      </div>
                                                  </div>
                                                  <div class='col-md-7'>
                                                      <div class='form-group'>
                                                          <label for='carname' class='form-label'>Tên xe:</label>
                                                          <input type='text' name='carname' placeholder='".$result["carname"]."' class='form-control' required>
              
                                                      </div>
                                                  </div>
                                              </div>
              
                                              <div class='row'>
                                                  <div class='col-md-4'>
                                                      <div class='form-group'>
                                                          <label for='idcar' class='form-label'>Mã Khung:</label>
                                                          <input id ='idcar' type='text' name='idcar' placeholder='".$result["idcar"]."' class='form-control'required>
                                                      </div>
                                                  </div>
                                                  <div class='col-md-4'>
                                                      <div class='form-group'>
                                                          <label for='price' class='form-label'>Giá:</label>
                                                          <input id ='price' type='text' name='price' placeholder='".$result["price"]."' class='form-control'required>
                                                      </div>
                                                  </div>
                                                  <div class='col-md-4'>
                                                      <div class='form-group'>
                                                        <label for='sale' class='form-label'>Giá khuyến mãi:</label>
                                                        <input id ='sale' type='text' name='sale' placeholder='".$result["sale"]."' class='form-control'required>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class='row'>
                                                  <div class='col-md-4'>
                                                      <div class='form-group'>
                                                          <label for='brand'>Nhãn Hàng:</label>
                                                          <input class='form-control form-label'id ='brand'  name='brand' placeholder='".$result["brand"]."' required>
                                                      </div>
                                                  </div>
                                                  <div class='col-md-4'>
                                                      <div class='form-group'>
                                                      <label for='level'>Dòng xe:</label>
                                                      <input class='form-control form-label'id ='level'  name='level' placeholder='".$result["level"]."'required >
                                                      </div>
                                                  </div>
                                                  <div class='col-md-4'>
                                                      <div class='form-group'>
                                                          <label for='satatus'>Trạng thái:</label>
                                                          <input class='form-control form-label' name='satatus' id='satatus' placeholder='".$result["satatus"]."'required>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class='row'>
                                                  <div class='col-md-4'>
                                                      <div class='form-group'>
                                                          <label for='sit'>Chỗ ngồi:</label>
                                                          <input id ='sit' type='text' name='sit' placeholder='".$result["sit"]."' class='form-control'required>
                                                      </div>
                                                  </div>
                                                  <div class='col-md-4'>
                                                      <div class='form-group'>
                                                          <label for='hopso' class='form-label'>Hộp số:</label>
                                                          <input id ='hopso' type='text' name='hopso' placeholder='".$result["hopso"]."' class='form-control'required>
                                                      </div>
                                                  </div>
                                                  <div class='col-md-4'>
                                                      <div class='form-group'>
                                                          <label for='dongco'>Động cơ:</label>
                                                          <input id ='dongco' type='text' name='dongco' placeholder='".$result["dongco"]."' class='form-control'required>                                        
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class='form-group'>
                                                  <div class='submit' colspan ='2'>
                                                      <button class='form-submit' name='editCar'>Chỉnh sửa</button>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        ";
                                        ?> 
                                  </form>  
 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>

        <footer class="footer">
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
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <!-- <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script> -->
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script> 

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

    <script>
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>

    

</html>

