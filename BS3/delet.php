<?php

include 'function.php';
    $id=$_GET['id'];

    $conn = mysqli_connect("localhost","root","","vidu");

    mysqli_set_charset($conn,"utf8");

    $sql ="DELETE FROM `contract` WHERE  id =$id";

    $result =$conn->query($sql);

    if($result){
        
        header('Location:orderlist.php');
        

    }else{
        warning('không xóa được');
    }

?>