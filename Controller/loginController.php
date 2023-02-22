<?php
session_start();
function validaLogin(){
    if(isset($_POST['pinLogin']) && !empty($_POST['pinLogin'])){
        $_SESSION['pinLogin'] = $_POST['pinLogin'];
        require './View/homeView.php';
    }else{
        //unset($_SESSION['pinLogin']);
        require './View/loginView.php';
    }
}