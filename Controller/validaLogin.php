<?php

if($_SERVER['REQUEST_METHOD'] == 'post'){
    if(isset($_POST['pinLogin']) && !empty($_POST['pinLogin'])){
        $_SESSION['pinLogin'] = $_POST['pinLogin'];
        include_once '../View/homeView.php';
    }else{
        unset($_SESSION['pinLogin']);
        header('Location:./View/loginView.php');
    }
}
