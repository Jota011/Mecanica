<?php
require './Model/connection.php';
session_start();

function login(){
    require './View/loginView.php';
}