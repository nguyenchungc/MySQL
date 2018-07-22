<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
       nhập năm dương lịch <input name="nam" type="number">
       <button name="amlich" onclick="amlich">Năm âm lịch là </button>
       <input name="text" type="text" disabled>
    </form>
    <?php
    function canchi($nam) {
        $nam = 2018;
        $can = ($nam-3)%10;
        $chi = ($nam-3)%12;
        
            if($can==0) $can = 'Quý';
            elseif ($can==1) $can = 'Giáp';
            elseif ($can==2) $can = 'Ất';
            elseif ($can==3) $can = 'Bính';
            elseif ($can==4) $can = 'Đinh';
            elseif ($can==5) $can = 'Mậu';
            elseif ($can==6) $can = 'Kỷ';
            elseif ($can==7) $can = 'Canh';
            elseif ($can==8) $can = 'Tân';
            else $can= 'Nhâm';
    
            if($chi==0) $chi = 'Hợi';
            elseif($chi==1) $chi = 'Tý';
            elseif($chi==2) $chi = 'Sửu';
            elseif($chi==3) $chi = 'Dần';
            elseif($chi==4) $chi = 'Mẹo';
            elseif($chi==5) $chi = 'Thìn';
            elseif($chi==6) $chi = 'Tỵ';
            elseif($chi==7) $chi = 'Ngọ';
            elseif($chi==8) $chi = 'Mùi';
            elseif($chi==9) $chi = 'Thân';
            elseif($chi==10) $chi = 'Dậu';
            else $chi = 'Tuất';
            return "năm $nam là năm $can $chi";
    }
            echo canchi(2019);
    ?>
</body>
    
</html>