<?php
    include 'config.php';
    include 'function.php';

    if (isset($_POST['username']) && $_POST['username'] != '' && 
        isset($_POST['password']) && $_POST['password'] != '' ) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password =md5($password);
        $sql = "SELECT * FROM user WHERE username ='" . $username . "' AND password ='" . $password . "'";
        $user =mysqli_query($conn,$sql);
        if( mysqli_num_rows($user) > 0 ){
            success("Đăng nhập thành công");
        }else{
            warning("Đăng nhập sai tài khoản hoặc mật khẩu");
        }

    }
?>