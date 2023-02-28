<?php

if(isset($_POST['pinLogin'])){
    validarLogin($_POST['pinLogin']);
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function validarLogin($pin){
    require '../Model/connection.php';
    if(!empty($pin)){
        $sql = "SELECT * FROM usuariopin WHERE pin = '$pin'";
        $query = $mysqli->query($sql);
        $num_rows = mysqli_num_rows($query); 
        if($num_rows){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['usuario'] = $row['nome'];
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