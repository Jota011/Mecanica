<?php
$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
switch ($url){

    case '/':
        require './View/loginView.php';
    break;

    case '/home':
        require './Controller/loginController.php';
        validaLogin();
    break;
    
    default:
        echo 'ERRO: Página não encontrada!';
}