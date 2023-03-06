<?php
$host = 'localhost';
$dbname = 'radajori';
$username = 'root';
$psswrd = '';

$con=mysqli_connect("localhost", "root", "","radajori");

$mysqli = new mysqli($host,$username,$psswrd,$dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
    //echo 'conectado';
}