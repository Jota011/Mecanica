<?php
include '../Controller/actionController.php';

//Veiculo
if (isset($_GET['idVeiculo'])){
    editarVeiculo($_GET['idVeiculo'],$_GET['modelo'],$_GET['marca'],$_GET['cor'],$_GET['desc']);
}

function editarVeiculo($idVeiculo,$modelo,$marca,$cor,$desc){
    require '../Model/connection.php';
    $sql = "UPDATE veiculos SET modelo='$modelo', marca='$marca', cor='$cor', descricao='$desc' WHERE id_veiculo='$idVeiculo'";
    try{
        $mysqli->query($sql);
        header('Location:../View/consCarroView.php?editado');
    }catch(Exception $e){
        echo $e->getMessage();
        die();
    }
}

function editaMotor(){
    require '../Model/connection.php';
    $idMotor = $_POST['idMotor'];
    $numMotor = $_POST['numeracao_motor'];
    $descMotor = $_POST['descricao_motor'];
    $base = $_POST['base'];

    $sql = "UPDATE motor SET base='$base', numeracao_motor='$numMotor', descricao_motor='$descMotor' WHERE id_motor='$idMotor'";
    try{
        $mysqli->query($sql);
        header('Location:../View/consMotorView.php?editado');
    }catch(Exception $e){
        echo $e->getMessage();
        die();
    }
}

//Servico
if (isset($_GET['idServico'])){
    editarServico($_GET['idServico'],$_GET['descricao_atividade'],$_GET['data_os'],$_GET['periodo'],$_GET['turma'],$_GET['veiculo'],$_GET['responsavel']);
}

function editarServico($idServico,$descricao_atividade,$data_os,$periodo,$turma,$veiculo,$responsavel){
    require '../Model/connection.php';
    $sql = "UPDATE ordem_servico SET descricao_atividade='$descricao_atividade', data_os='$data_os', periodo='$periodo', turma='$turma' veiculo='$veiculo' responsavel='$responsavel' WHERE id_os='$idServico'";
    try{
        $mysqli->query($sql);
        header('Location:../View/consServicoView.php?editado'); 
    }catch(Exception $e){
        echo $e->getMessage();
        die();
    }
}
