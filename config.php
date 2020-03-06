<?php
$servername = 'localhost';
$username = 'root';
$password =  '';
$db_name = 'codebora_db';

$conn = mysqli_connect($servername,$username,$password,$db_name);

if(!$conn){
    die ("Connection to DB unsuccessful <br>".mysqli_connect_error());
}