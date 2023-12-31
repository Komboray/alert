<?php
//we are going to connect to the database
$host = '127.0.0.1';
$username = 'root';
$pass = '';
$db_name = 'jaribu';
$conn = '';

$conn = mysqli_connect($host, $username, $pass, $db_name);


if($conn){
    // echo "You are connected";
}else{
    echo "You are not connected!";
}


?>