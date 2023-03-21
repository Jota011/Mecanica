<?php
if (isset($_GET['idVeiculo'])){
    deletarVeiculo($_GET['idVeiculo']);
}
///////
function deletarVeiculo($idVeiculo){
    require '../Model/connection.php';
    $sql = "DELETE FROM veiculos WHERE id_veiculo = '$idVeiculo'";
    try{
        $mysqli->query($sql);
        header('Location:../View/consCarroView.php');
    }catch(Exception $e){
        echo $e->getMessage();
    }
}