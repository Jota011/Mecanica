<?php
session_start();
require_once '../Controller/actionController.php';

function validarLogin($pin){
    require '../Model/connection.php';
    if(!empty($pin)){
        $sql = "SELECT * FROM usuariopin WHERE pin = '$pin'";
        $query = $mysqli->query($sql);
        $num_rows = mysqli_num_rows($query); 
        if($num_rows){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['nome'] = $row['nome'];
            if($row['is_dev'] != 0){
                $_SESSION['is_dev'] = $row['is_dev'];
            }
            header('Location:../View/homeView.php');
        }else{
            header('Location:../View/loginView.php?erro=1');
        }
    }else{
        unset($_SESSION['usuario']);
        unset($_POST['pinLogin']);
        header('Location:./View/loginView.php');
    }
}