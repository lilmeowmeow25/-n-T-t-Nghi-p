<?php 
    include 'config.php';
    include 'function.php';
    session_start();

    if (isset($_POST['name']) && $_POST['name'] != '' && 
        isset($_POST['do1']) && $_POST['do1'] != '' && 
        isset($_POST['do2']) && $_POST['do2'] != '' &&
        isset($_POST['do3']) && $_POST['do3'] != '' &&  
        isset($_POST['do4']) && $_POST['do4'] != '' && 
        isset($_POST['do5']) && $_POST['do5'] != '' && 
        isset($_POST['do6']) && $_POST['do6'] != ''
    ) {
        // thực hiện xử lý khi người dùng ấn nút submit và điền đủ thông tin
        $name = $_POST["name"];
        $do1 = $_POST["do1"];
        $do2 = $_POST["do2"];
        $do3 = $_POST["do3"];
        $do4 = $_POST["do4"];

        $do6 = $_POST["do6"];
        $do5 = $_POST["do5"];

  
      

        $sql = "INSERT INTO `todo list` (`name`, `do1`,`do2`,`do3`,`do4`, `do6`, `do5`) VALUES ('$name','$do1','$do2','$do3','$do4','$do6','$do5')";
        mysqli_query($conn, $sql);
        success("Thành công");
    }
?>