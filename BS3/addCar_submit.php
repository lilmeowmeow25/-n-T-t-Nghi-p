<?php 
    include 'config.php';
    include 'function.php';
    session_start();

    if (isset($_POST['carname']) && $_POST['carname'] != '' && 
        isset($_POST['idcar']) && $_POST['idcar'] != '' && 
        isset($_POST['price']) && $_POST['price'] != '' &&
        isset($_POST['brand']) && $_POST['brand'] != '' &&  
        isset($_POST['sale']) && $_POST['sale'] != '' && 
        isset($_POST['level']) && $_POST['level'] != '' && 
        isset($_POST['company']) && $_POST['company'] != '' && 
        isset($_POST['img']) && $_POST['img'] != '' && 
        isset($_POST['sit']) && $_POST['sit'] != '' && 
        isset($_POST['hopso']) && $_POST['hopso'] != '' && 
        isset($_POST['dongco']) && $_POST['dongco'] != '' && 
        isset($_POST['satatus']) && $_POST['satatus'] != ''
    ) {
        // thực hiện xử lý khi người dùng ấn nút submit và điền đủ thông tin
        $carname = $_POST["carname"];
        $idcar = $_POST["idcar"];
        $price = $_POST["price"];
        $brand = $_POST["brand"];
        $sale = $_POST["sale"];
        $company = $_POST["company"];
        $satatus = $_POST["satatus"];
        $level = $_POST["level"];
        $dongco = $_POST["dongco"];
        $img = $_POST["img"];
        $sit = $_POST["sit"];
        $hopso = $_POST["hopso"];
  
      

        $sql = "INSERT INTO product (`carname`, `idcar`,`price`,`brand`,`sale`,`company`, `satatus`,`dongco`, `level`,`img`,`hopso`,`sit`) VALUES ('$carname','$idcar','$price','$brand','$sale','$company','$satatus','$dongco','$level','$img','$hopso','$sit')";
        mysqli_query($conn, $sql);
        success("Thành công");
    }
?>