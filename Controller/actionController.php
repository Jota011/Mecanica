<?php
$action = $_GET['action'];
if (function_exists($action)){
    call_user_func($action);
}