<?php

try {
$connect = new PDO('mysql:host=localhost;dbname=php0903', 'root',''); 
$connect ->exec("set names utf8");
} catch (Exception $e){
    echo "error";
    echo $e ->getMessage();
}

//$sql = "DELETE FROM users WHERE id=44";
// $sql = "INSERT INTO users(email,fullname,address,password)
// VALUE 
// ('Ngung1@gmail.com','chung2','chung2',1234567),
// ('Ngunhoang21@gmail.com','chreung22','chunqwg22',12behwo567),
// ('Nguyenhoang21@gmail.com','chung22','chung22',1234567); 
// ";

// $result = $connect->exec($sql);
// print_r($result);
$id =42;
$username ="huonghuong";
$sql = "SELECT * FROM users WHERE ID=? AND username =?";
$stmt = $connect->prepare($sql);
$stmt ->bindValue(1,$id);
$stmt ->bindParam(2,$username);
$check = $stmt->execute();
if($check){
    $result =$stmt->fetchAll(PDO::FETCH_OBJ); 
    print_r($result);

} else {
    echo "error";
}
?>
//sellect <fetch>
<fetchall></fetchall>