<?php


//DATABASE INFO
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'code_bora_academy';


$conn = mysqli_connect($serverName, $userName, $password, $dbName);

//CHECK IF CONN IS WORKING
if (!$conn){
    die("Hakuna Connection Kwa DB <br>".mysqli_connect_error());
//}else{
//    echo "Connection kwa DB iko Sawa <br>" ;
}
