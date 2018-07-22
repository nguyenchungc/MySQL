<?php
class DBconnect {

    private $connect = null;


    function __construct($dbname ='php0903', $user = 'root', $password =''){
        
        $this->connect = new PDO("mysql:host=localhost;dbname=$dbname",$user,$password);
        $this->connect ->exec("set name utf8"); 
    }

    //sd cho lenh insert, update, delete

    function setStatement($sql,$options=[]){
        //echo $sql;
        $stmt = $this->connect->prepare($sql);
        for ($i=0;$i<count($options);$i++){

            $stmt ->bindValue($i+1,$options[$i]);
        }
        return $stmt;

    }
    function executequery($sql,$options=[]){
        $stmt = $this->setStatement($sql,$options);
        return $stmt->execute[];
    }

    //su dung cau SELECT return 1 data
    function loadonerow($sql,$options=[]){
        $stmt =$this->setStatement($sql,$options);
        $check = $stmt->execute();
        if($check){
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        else return false;
    }

    //su dung cau SELECT return more data
     function loadMoreRows($sql,$options[]){
        $stmt =$this->setStatement($sql,$options);
        $check = $stmt->execute();
        if($check){
            return $stmt->fetch(PDO::FETCH_ALL);

     } else return false;

}

$con = new DBconnect();
// $sql = "INSERT INTO users(email,fullname,address,password,birthdate)
//         VALUE (?,?,?,?,?)";

// $options = [

//     'dsdsj@gmail.com',
//     'dfdfd',
//     'ewewew',
//     'wewewww',
//     '1224-7-8'
// ];
$sql = "DELETE FROM users WHERE email=?";

$options = [

    'dsdsj@gmail.com',
];
$check = $con->executequery($sql,$options);
var_dump($check);



?>

