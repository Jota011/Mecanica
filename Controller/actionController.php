<?php
switch ($_GET['action']){
    case 'validaLogin':
        validarLogin($_POST['pinLogin']);
    break;
    case 'cadServico':
        cadServico($_POST['data'], $_POST['turno'], $_POST['turma'], $_POST['veiculo'], $_POST['descricao'], $_POST['responsavel']);
    break;
}
