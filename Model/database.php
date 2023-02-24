<?php

function verificaPin($pin){
    require '../Model/connection.php';    
    $sql = "SELECT * FROM usuariopin WHERE pin = :p";
    try{
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':p', $pin);
        $stmt->execute();
        $verifica = $stmt->fetch();
    }catch(PDOException $e){
        $e->getMessage();
    }
    return $verifica;
}