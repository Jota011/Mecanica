<?php
<<<<<<< HEAD
if (isset($_GET['idVeiculo'])) {
=======
            //Veiculo
if (isset($_GET['idVeiculo'])){
>>>>>>> 43fb68965fc27387948b44ceb116cafcab6b5421
    deletarVeiculo($_GET['idVeiculo']);
}
///////
function deletarVeiculo($idVeiculo)
{
    require '../Model/connection.php';
    $sql = "DELETE FROM veiculos WHERE id_veiculo = '$idVeiculo'";
    try {
        $mysqli->query($sql);
        header('Location:../View/consCarroView.php');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
<<<<<<< HEAD
?>

<?php
if (isset($_GET['idMotor'])) {
    deletarMotor($_GET['idMotor']);
}
///////
function deletarMotor($idMotor)
{
    require '../Model/connection.php';
    $sql = "DELETE FROM motor WHERE id_motor= '$idMotor";
    try {
        $mysqli->query($sql);
        header('Location:../View/consMotorView.php');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>

<?php
if (isset($_GET['idServico'])) {
    deletarServico($_GET['idServico']);
}
///////
function deletarServico($idServico)
{
    require '../Model/connection.php';
    $sql = "DELETE FROM ordem_servico WHERE id_os = '$idServico'";
    try {
        $mysqli->query($sql);
        header('Location:../View/consservicoView.php');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} ?>
=======

            //Motor

if (isset($_GET['idMotor'])){
    deletarMotor($_GET['idMotor']);
}
///////
function deletarMotor($idMotor){
    require '../Model/connection.php';
    $sql = "DELETE FROM motor WHERE id_motor = '$idMotor'";
    try{
        $mysqli->query($sql);
        header('Location:../View/consMotorView.php');
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

            //Servico

if (isset($_GET['idServico'])){
    deletarServico($_GET['idServico']);
}
///////
function deletarServico($idServico){
    require '../Model/connection.php';
    $sql = "DELETE FROM ordem_servico WHERE id_os = '$idServico'";
    try{
        $mysqli->query($sql);
        header('Location:../View/consServicoView.php');
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
>>>>>>> 43fb68965fc27387948b44ceb116cafcab6b5421
