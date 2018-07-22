<?php
Session_start();
if(!isset($_SESSION['user'])&& !isset($_COOKIE['user'])){
    $_SESSION['error'] ="BẠN VUI LÒNG ĐĂNG NHẬP";
    header('location: login.php');
}
elseif(!isset($_COOKIE['user'])){
    isset($_SESSION['user']) == isset($_COOKIE['user'])
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Hello Admin </h2>
    <a href="logout.php">log out </a>
</body>
</html>