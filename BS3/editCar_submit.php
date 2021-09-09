<?php
    include 'function.php';

    $id = $_GET['id'];
    $carname = $_POST['carname'];
    $idcar = $_POST['idcar'];
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $brand = $_POST['brand'];
    $level = $_POST['level'];
    $satatus = $_POST['satatus'];
    $sit = $_POST['sit'];
    $hopso = $_POST['hopso'];
    $dongco = $_POST['dongco'];

    $conn = mysqli_connect("localhost","root","","vidu");

    mysqli_set_charset($conn,"utf8");



    $sql ="UPDATE `product` SET carname ='$carname' , idcar = '$idcar' , price = '$price' , sale = '$sale' , brand = '$brand' , level = '$level' ,
    satatus = '$satatus' , sit = '$sit' , hopso = '$hopso' , dongco = '$dongco' WHERE id = $id ";

    $result = $conn ->query($sql);

    mysqli_query($conn, $sql);
    if($result){
        
        header('Location:table_product.php');
        

    }else{
        warning('Sai thông tin');
    }


    $conn->close();
?>