<?php
class sinhvien{

    public static $id;
    // function __construct($maso){
    //         ///$this->id =$maso;
    //     sinhvien ::$id =$maso;

    //}

    public function setid($maso){
        sinhvien::$id = $maso;
    }
    public static function getid(){
        return sinhvien::$id;

    }
}
$sv = new sinhvien;
$sv ->setid(12);
echo $sv->getid();

echo "<br>";

echo sinhvien::getid();

//echo $sv::$id;
//var_dump($sv);
//echo $sv->id;



?>