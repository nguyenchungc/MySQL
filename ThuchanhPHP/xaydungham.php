<?php
// function iso(){
//     return $so = 2;
// }
//     echo iso();
//     echo "this is ";

// function iso($so=0) {
//     $so += 5;
//     return $so;
// }
//     $a = 3;
//     echo iso($a);
// function tang1($a) {
//     $a = $a -(-1);
// }

function phuongtrinhbac2($a, $b) {
    $kg = '';
    if ($a == 0) {
        if($b == 0) $kg = "phương trình vô số nghiệm";
        else $kg = "phương trình vô nghiệm";
    } else
    $kg = (-$b)/$a;
    return $kg;
}

echo (phuongtrinhbac2(1,0));
echo "<hr>";

function tongso($a){
$tong = 0;
    for($i = 2; $i <=$a; $i +=2){
        $tong+= $i;
    } return $tong;
} echo tongso(6);
echo "<hr>";

function bien($a) {
    $tong = 0;
    for($i=2, $i<=sqrt($a), $i++) {
        if($a%$i==0)
    }
}

?>