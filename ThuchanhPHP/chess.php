<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<style>
.banco { width: 240px; height: 240px; border: 1px solid black; margin: auto }
.oco {width: 30px; height: 30px; float: left}
.trang {background-color: #000}
.den {background-color: #fff}

</style>
<body>
    <div class="banco">
        <?php
            for($y=1; $y<=8; $y++){

                for($x=1; $x<=8; $x++) {
                    if(($x+$y)%2==0){
                       echo '<div class="oco trang"></div>';
                    }else echo '<div class="oco den"></div>';
                }
            }
        ?>
        
    </div>
</body>
</html>