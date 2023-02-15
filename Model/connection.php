<?php
$host = 'localhost';
$dbname = 'radajori';
$username = 'root';
$psswrd = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$psswrd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'conectado';
}catch(PDOException $e){
    echo $e->getMessage();
}