<?php
switch ($_GET['action']){
    case 'validaLogin':
        validarLogin($_POST['pinLogin']);
    break;
}
