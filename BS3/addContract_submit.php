<?php 
    include 'config.php';
    include 'function.php';
    session_start();

    if (isset($_POST['nameser']) && $_POST['nameser'] != '' && 
        isset($_POST['name']) && $_POST['name'] != '' && 
        isset($_POST['email']) && $_POST['email'] != '' &&
        isset($_POST['phone']) && $_POST['phone'] != '' &&  
        isset($_POST['address']) && $_POST['address'] != '' && 
        isset($_POST['address2']) && $_POST['address2'] != '' && 
        isset($_POST['date']) && $_POST['date'] != '' && 
        isset($_POST['time']) && $_POST['time'] != '' && 
        isset($_POST['note']) && $_POST['note'] != ''
    ) {
        // thực hiện xử lý khi người dùng ấn nút submit và điền đủ thông tin
        $nameser = $_POST["nameser"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $date = $_POST["date"];
        $note = $_POST["note"];
        $address2 = $_POST["address2"];
        $time = $_POST["time"];
  
      

        $sql = "INSERT INTO `contract`(`nameser`, `name`,`email`,`phone`,`address`,`date`, `note`, `address2`,`time`) VALUES ('$nameser','$name','$email','$phone','$address','$date','$note','$address2','$time')";
        mysqli_query($conn, $sql);
        success("Thành công");
    }
?>