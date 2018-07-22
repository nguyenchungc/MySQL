<?php
session_start();
$images = $_FILES['image'];
if($images['error'][0]>0) {
    echo "upload file";
}
foreach($images['size'] as $size){
    if($size >1024*1024){
        $_SESSION["error"] = "file quá lớn";
        header("Location:index.php");
    }
}// die;
$arrext = ['png','jpg','gif']; 
foreach($images['name'] as $name){
        $ext = pathinfo($name,PATHINFO_EXTENSION);
        if(!in_array($ext,$arrext)){
            
            $_SESSION["error"] = "file is not allowed";
            //echo "file is not allowed";

            header("Location:index.php");
            die;
        }
}
foreach($images['tmp_name'] as $key=>$tmp_name){
    $newname = time().'-'.$images['name'][$key];
    move_uploaded_file($tmp_name, '../file/'.$newname);

} echo "thoa mãn";
?>