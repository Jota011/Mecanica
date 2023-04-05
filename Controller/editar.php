<?php
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
?>


<?php
if (isset($_GET['idMotor'])){
    editarMotor($_GET['idVeiculo'],$_GET['modelo'],$_GET['marca'],$_GET['cor'],$_GET['desc']);
}

function editarMotor($idVeiculo,$modelo,$marca,$cor,$desc){
    require '../Model/connection.php';
    $sql = "UPDATE motor SET modelo='$modelo', marca='$marca', cor='$cor', descricao='$desc' WHERE id_veiculo='$idVeiculo'";
    try{
        $mysqli->query($sql);
        header('Location:../View/consCarroView.php?editado');
    }catch(Exception $e){
        echo $e->getMessage();
        die();
    }
}
?>