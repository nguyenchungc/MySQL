<?php
// echo "hello world";
$File = $_FILES['data'];
print_r($File);
date_default_timezone_set('Asia/Ho_Chi_Minh');
// echo $File['name'];
// echo $File['tmp_name'];

//check file size <10MB;
//chỉ cho phép upload file image (duoi jpg)
//chọn thuộc tính file upload 
// ;
// if($File['size']<=1024*1024){
//     $ext = strtolower(pathinfo($File['name'], PATHINFO_EXTENSION));

//     $arrext = ['png','jpg','gif'];
//     if(in_array($ext,$arrext)){
//         $newName = date('d-m-Y H-i-s', time()).'-'.rand(121212,323454644).'-'.$File['name'];
//         move_uploaded_file($File['tmp_name'], 'file/'.$newName);
//         echo "success";
//     } else {echo "không đúng định dạng";}

   
// } else {echo "file quá lớn";}

//echo $ext;
//if( $ext !== 'gif' || $ext !== 'png' || $ext !== 'jpg' ) {echo 'error';}
//print_r($File['size']);
//upload multifile vào cũng thực hiện validate như trên, nếu có file nào đó lỗi thì roll back hết file

    $y = count($_FILES['data']['error']);
    if($File['size']<=1024*1024){
        $ext = strtolower(pathinfo($File['name'], PATHINFO_EXTENSION));
    
        $arrext = ['png','jpg','gif'];
            if($y==0) {
                if(in_array($ext,$arrext)){
                $newName = date('d-m-Y H-i-s', time()).'-'.rand(121212,323454644).'-'.$File['name'];
                move_uploaded_file($File['tmp_name'], 'file/'.$newName);
                echo "success";
                } else {echo "không đúng định dạng";}
            } else echo "file bị lỗi";
            
       
    } else echo "file quá lớn";
?>
