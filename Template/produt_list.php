<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SUPERCARS</title>
<link rel="shortcut icon" href="/images/asian/logo.png" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- Library CSS -->
<link href="./css/lecker_library.css" rel="stylesheet">

<!-- Icons CSS -->
<link href="fonts/themify-icons.css" rel="stylesheet">
<link href="fonts/selima/stylesheet.css" rel="stylesheet">

<!-- Theme CSS -->
<link href="./css/lecker_style.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Lato|Monoton" rel="stylesheet">

<!-- custom -->
    
    <title>chi tiết sản phẩm</title>
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



<!-- end -->
</head>
<body >


<!-- Page -->
<div class="lec_page lec_page_neon" id="lec_page">
    
    <!-- To Top -->
    <a href="#lec_page" class="lec_top lec_go"><b class="ti ti-angle-up"></b></a>
    
    <!-- Header -->
    <header>    
        <div class="container">   
            
            <!-- Logo -->
            <a href="#" class="lec_logo">SUPERCARS <i><span>CAR</span><span>DEALER</span></i></a>

            <!-- Menu -->
            <div class="lec_main_menu">
                
                <div class="lec_main_menu_icon">
                    <i></i><i></i><i></i><i></i>
                    <b>HOME</b>
                    <b class="lec_main_menu_icon_b">Back</b>
                </div>
            </div>

            <!-- Menu Content -->
            <div class="lec_main_menu_content lec_image_bck" data-color="rgba(0,0,0,0.9)" >
                <!-- <img src="/images/asian/" alt=""> -->
                <!-- Over -->
                <div class="lec_over" data-color="#000" data-opacity="0.8"></div>
            </div>

            <div class="lec_main_menu_content_menu lec_wht_txt text-right">
                <div class="container">
                    <ul>
                        <li class="lec_parent"><a href="#">Home</a>
                            <ul>
                                <li><a href="#">Sản Phẩm</a></li>
                                <li><a href="service.php">Dịch Vụ</a></li>
                                <li><a href="#">Dịch Vụ Gia Tăng</a></li>
                            </ul>
                        </li>

                        <li class="lec_parent"><a href="#">Tin Tức</a>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Công Nghệ</a></li>
                                <li><a href="#">Sự Kiện</a></li>
                            </ul>
                        </li>

                        <li class="lec_parent"><a href="#">Liên Hệ & Tuyển Dụng</a>
                            <ul>
                                <li><a href="">Tp.Hà Nội</a></li>
                                <li><a href="">Tp.Đà Nẵng </a></li>
                                <li><a href="">Tp.Hồ Chí Minh </a></li>
                                <li><a href="">Tp.Cà Mau </a></li>
                            </ul>
                        </li>
                        <a href="login.html">Login</a>
                    </ul>
                    <div class="lec_main_menu_content_menu_copy">
                        <p>© SupperCars 2021</p>
                        <!-- Social Buttons -->
                        <div class="lec_footer_social">
                            <a href="https://www.facebook.com/vanthanh.tran.108/"><i class="ti ti-facebook lec_icon_box"></i></a>
                            <a href="https://www.instagram.com/_charlie.br0wn/"><i class="ti ti-instagram lec_icon_box"></i></a>
                            <a href="#"><i class="ti ti-google lec_icon_box"></i></a>
                            <a href="https://www.youtube.com/watch?v=A9CMIAVpREI"><i class="ti ti-youtube lec_icon_box"></i></a>
                        </div>
                    </div>
                </div>
                <!-- container end -->
            </div>
            <!-- menu content end -->
        
        </div>
    </header>
    <!-- Header End -->
    


    <!-- Slider -->
    <div class="lec_slider lec_slider_inside lec_image_bck lec_fixed lec_wht_txt" data-stellar-background-ratio="0.3"  data-image="images/\">
        
        <!-- Firefly -->
        <div class="lec_slider_firefly" data-total="30" data-min="1" data-max="3"></div>

        <!-- Over -->
        <div class="lec_over" data-color="#000" data-opacity="0.8"></div>
        

        <div class="container">


            <!-- Slider Texts -->
            <div class="lec_slide_txt lec_slide_center_middle text-center">
                <h2 class="lec_neon_title">CAR DEALER <span class="lec_neon_subtitle">SUPERCARS<b>romised quality.</b></span></h2>
                <div class="lec_gold">promised quality.</div>

                <div class="lec_slide_subtitle">yêu xe như yêu vợ bạn</div>
            </div>
            <!-- Slider Texts End -->
        
        </div>
        <!-- container end -->
        

    </div>

    <!-- Content -->
    <section id="lec_content" class="lec_content">


        <!-- section -->
        <section class="lec_section" style="background-color: #d9d6d6;">
            <div class="container text-center" style="margin-top: -20px;">
     <!-- Menu -->
                <h2>Danh Sách Sản Phẩm</h2>
                
                <div class="list">
                <?php 
                    $conn =new mysqli('localhost', 'root','','vidu');

                    $sql ="SELECT  `carname`, `price`, `brand`, `sale`, `satatus`,`hopso`,`sit`,`dongco`,`sale`,`img` FROM `product`";
                    $result =$conn ->query($sql);

                    while( $row = $result -> fetch_assoc()){

                        echo"
                        <div class='filterDiv '>
                            <div class='Product'>
                                <div class='Product_List'>
                                    <img  src='./images/asian/".$row['img']."' >
                                    <span class='chitiet'>
                                        <span class='Name'>
                                        ".$row['carname']."
                                        </span>

                                        <span class='Price'>
                                        ".$row['price']."VNĐ
                                        </span>
                                        <span class='Price'>
                                        ".$row['sale']." VNĐ Sale
                                        </span>

                                        <span class='Status'>
                                        <span class='Stauts_product'>
                                            <i class='fas fa-circle icon'></i>".$row['sit']." chỗ ngồi
                                        </span>
                                        <span class='Stauts_product'>
                                            <i class='fas fa-circle icon'></i> Hộp số :".$row['hopso']."
                                        </span>
                                        <span class='Stauts_product'>
                                            <i class='fas fa-circle icon'></i> Động cơ:".$row['dongco']."
                                        </span>
        
                                    </span>
                                    <div class='Click_product'>
                                    <a href='dangkylaithu.php' class='click_btn btn'> Đăng ký lái thử</a>
                                    <a href='product_detail.php' class='click_btn btn'> Chi Tiết</a>

                                </div>
                                </div>
                            </div>
                        </div>


                        ";
                        
                    }
                    ?>
                </div>    

            </div>
            
                <!-- container end -->
                
        </section>

        <!-- section end -->

    
    </section>
    <!-- Content End -->
        
    

    <!-- Footer -->
    <footer class="lec_image_bck text-center lec_wht_txt" data-image="images/main_back_bl.jpg">
      <div class="container">
          <div class="row">
              <div class="col-md-12">

                  

                  <!-- Copyrights -->
                  <h2 class="lec_neon_title">CARDEALER <span class="lec_neon_subtitle">SUPERCARS<b>ROMISED QUALITY.</b></span></h2>                    
                  <p>Visa, MasterCard and cash. <br>
                  Transaction fee for payments by CC or banking. <br>
                  No short of money.
                  </p>


                  <!-- Social Buttons -->
                  <div class="lec_footer_social">
                      <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">
                          <a href="https://www.facebook.com/vanthanh.tran.108/"><i class="ti ti-facebook lec_icon_box"></i></a>
                          <a href="https://www.instagram.com/_charlie.br0wn/"><i class="ti ti-instagram lec_icon_box"></i></a>
                          <a href="#"><i class="ti ti-google lec_icon_box"></i></a>
                          <a href="https://www.youtube.com/watch?v=A9CMIAVpREI"><i class="ti ti-youtube lec_icon_box"></i></a>
                      </div>
                  </div>

                  <p>© SupperCars 2021</p>

              </div>
          </div>
      </div>
  </footer>
    <!-- Footer End -->

</div>
<!-- Page End -->



<!-- JQuery -->
<script src="./js/jquery-1.12.4.min.js"></script> 
<!-- Library JS -->
<script src="./js/lecker_library.js"></script> 

<!-- Theme JS -->
<script src="./js/lecker_script.js"></script>


     <!-- jquery -->
     <script src="./js/jquery_thuvien.js"></script>
     <!-- Swiper -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script src="./js/swiper.js"></script>
     <!-- tabs -->
     <script src="./js/tabs_tinhnang.js"></script>

          
     <script>
        filterSelection("all")
        function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("filterDiv");
          if (c == "all") c = "";
          for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }
        
        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
          }
        }
        
        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
          }
          element.className = arr1.join(" ");
        }
        
        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("Click_name");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }
        </script>
</body>
</html>