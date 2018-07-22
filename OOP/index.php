<?php


    class sinhvien
    {
        //tìm hiểu property
        //public $name = 'Nguyen A'; //thuộc tính: mức truy cập public
        private $name = 'Nguyen A'; // thuộc tính private dùng bảo mật các thuộc tính

        function getName() {
            return $this ->name; //$this chính là class sinhvien

        }

        function setname($fullname) {
            $this ->name =$fullname;
        }
    }
    $sv = new sinhvien;
    echo $sv ->getName();

    echo "<br>";

    $sv ->setname('huong');

    $sv ->age =12;
    echo $sv ->getname();
    var_dump($sv);
    



    // $sv = new sinhvien;
    // echo $sv ->name; //get name
    // echo "<br>";
    // $sv ->name = 'nguyen B'; // set name
    // echo $sv ->name;

    // $sv = new sinhvien;
    // $sv1 = new sinhvien;
    // var_dump($sv);
    // var_dump($sv1);

    // if($sv===$sv1) {echo "same";} else echo "khác";
?>
