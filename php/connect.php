<?php
$servername = "localhost";
$database = "perpus";
$username = "root";
$password = "";

$connect = mysqli_connect($servername,  $username, $password, $database,);

if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connect Successfully";
mysqli_close($connect);
?>