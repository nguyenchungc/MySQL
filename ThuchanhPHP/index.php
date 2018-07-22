<?php
    //echo "Hello world";
    //echo "<br>";
    // $a = 1;
    // $b = 2;
    // $c = $a + $b;
    // //echo "Tổng của $a và $b là $a + $b = $c";
    // echo "Tổng của $a và $b là $a + $b = ".($a+$b);

    // $arr = array(
    //     1 => 'số 1',
    //     2 => 'số 2'
    // );
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    // $arr2 = [
    //     1 => 'số 1',
    //     2 => 'số 2'
    // ];
    // $bool = true;
    // var_dump($bool);
    
    // if($bool) echo "yes";
    // else echo "no";
    // echo "<br>";
    // $json = json_encode($arr2); //string

    //echo $json;

    // class objA {
    //     public $a = 1;
    //     public $b = "dssds";

    // }
    // $objA = new objA;
    // echo "<pre>";
    // print_r($objA);
    // echo "</pre>";

    // define('PI', 3.14);
    // echo PI;
    $arr = array(
        'value1' => 'số 1',
        '2' => 'số 2',
        '3' => 'số 3',
        '4' => 'số 4',
        '5' => 'số 5',
        '6' => 'số 6',
        '7' => 'số 7',
        '8' => 'số 8',
        '9' => 'số 9',
        );
    //     echo "<pre>";
    //     print_r($arr);
    //     echo "</pre>";

    // for($i = 1; $i < count($arr); $i++){
    //     echo $arr[$i];
    //     echo "----";
    //     echo $i;
    //     echo "<br>";
    // }
    // echo "<hr>";
    //foreach($arr as $key) {
    // echo "<pre>";
    //     echo $arr['2'];
    // echo "</pre>";
    //}
    // ;
    // }
    // array_splice($arr,2,0,[]);
    // print_r($arr);
    function tinhtoan($a, $b) {
        if ($b == 0 ) throw new Exception('cannot excute');
        return $a/$b;
    } 
    try {echo tinhtoan(3,0);}
    catch (Exception $e) {echo $e ->getMessage();}
    function tinhtoan2($a, $b) {
        if ($b == 0 ) return"cannot";
        return $a/$b; }
        echo tinhtoan2(3,0);
    ?>