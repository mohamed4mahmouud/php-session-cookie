<?php
$dbname = 'iti';
$servername = 'localhost';
$dbpassword = "";
$dbuser = "root";

$conn = mysqli_connect($servername,$dbuser,$dbpassword,$dbname);

if(!$conn){
    die('connection failed'.mysqli_connect_error());
}
?>