<?php
session_start();
if(isset($_POST['btnlogin'])) {
    if($_POST['txtEmail']=="nguyenhoaichung@gmail.com" && $_POST['txtPassword']=='1234') {
        //login thành công
        $_SESSION['user'] = $_POST['txtEmail'] ;

        //remember me
        if(isset($_POST['remember']) && $_POST['remember']==1)
        {
            setcookie('user',$_POST['txtEmail'], time()+300);
        }

        header('location:home.php');



    }
    else {

        $_SESSION['error'] = "sai thông tin" ;
        header('location:login.php');
    }
} else{
    header('location:login.php');
}


?>