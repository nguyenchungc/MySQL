<?php

class sinhvien {
        
        private $name = 'Nguyen A';
        public $tmpname ='nguyen B';
        protected $tien = 10000;

        function getName() {
            return $this ->name;

        }

        function setname($fullname) {
            $this ->name =$fullname;
        }
    }

class hocsinh extends sinhvien { //hocsinh là lớp con, sinhvien là lop cha
        function receiver() {
            return $this ->tien;
        }

}

$hs = new hocsinh;
echo $hs ->getname();
echo $hs ->receiver();

?>