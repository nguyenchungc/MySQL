<?php
function createtoken(){
    $str = "1234567890HJHKKKHKLBKVDREDCGNGVfsdfklsdhfkdnflkdnfhdjsh";
    $token ='';
    for($i=1; $i<=30; $i++){
       
        $start = rand(0,strlen($str)-1);
        $token .=substr($str,$start,1); //"1" lấy 1 ký tự bắt đầu
    }
    return $token;
}
echo createtoken();
?>