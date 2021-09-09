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
        <link rel="stylesheet" href="style.css">nk
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
                <a href="/BS3/dashboard.php" class="simple-text">
                    CarDealer
                </a>
            </div>

            <ul class="nav">
                <li>
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
                <li class="active">
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
                    <a class="navbar-brand" href="#">Product List</a>
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
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Danh Sách Sản Phẩm</h4>
                                <div class='alert' name='alert'></div>
                            </div>
                            <div class="content table-responsive table-full-width" style="padding:20px">
                                <table id="example" class="display" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Stt</th>
                                            <th>IdCar</th>
                                            <th>Company</th>
                                            <th>Car name</th>
                                            <th>Price</th>
                                            <th>Sale</th>
                                            <th>Brand</th>
                                            <th>Status</th>
                                            <th>Sửa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $conn =new mysqli('localhost', 'root','','vidu');
                                            
                                            $sql ="SELECT  `idcar`,`id`, `company`, `carname`, `price`, `brand`, `sale`, `satatus` FROM `product`";
                                            $result =$conn ->query($sql);
                                            
                                            while( $row = $result -> fetch_assoc()){

                                                echo"
                                                <tr>
                                                <td>
                                                    <div class='number'>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class='User'>
                                                        <span>".$row['idcar']."</span>
                                                    </div>
                                                </td>
                                                <td>
                                                <div class='User'>
                                                    <span>".$row['company']."</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class='User'>
                                                    <span>".$row['carname']."</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class='User'>
                                                    <span>".$row['price']."</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class='User'>
                                                    <span>".$row['sale']."</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class='User'>
                                                    <span>".$row['brand']."</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class='User'>
                                                    <span>".$row['satatus']."</span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href='editCar.php?id=".$row['id']."'>Sửa</a>
                                            </td>
                                            
                                            </tr>
                                                ";
                                                
                                            }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Stt</th>
                                            <th>IdCar</th>
                                            <th>Company</th>
                                            <th>Car name</th>
                                            <th>Price</th>
                                            <th>Sale</th>
                                            <th>Brand</th>
                                            <th>Status</th>
                                            <th>Sửa</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                
                                <div class="add_car">
                                   <a href="addCar.php"><button type="button" class="btn btn-primary">Thêm sản phẩm</button></a> 
                                </div>

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
                                DataBoard
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                User
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Product
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
    <script src="./js/editCar.js"></script>

</html>
