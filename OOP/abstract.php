<?php

    abstract class sinhvien{
        public $name = "huong";
        function getname(){
            return $this ->name;
        }abstract function setname();
    } 
    class hocsinh extends sinhvien {
        function setname(){
            $this ->name ="ngoc";
        }
    }


    $sv = new hocsinh;

?>