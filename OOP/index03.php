<?php
class sinhvien{

    public $id;
    public $phone;

    function __construct($maso){
            $this ->id = $maso;


    }
    function setphone($sdt){
            $this ->phone = $sdt;
   }

   function __destruct(){
       $this->id = NULL;
       $this->phone = NULL;
       
       echo "reset"; 
       echo $this->id;
   }
   
}
$sv =  new sinhvien(1230);
$sv->setphone(12345666);
echo "<br>";
echo $sv->phone;
//var_dump($sv);


?>