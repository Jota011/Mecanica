<?php
require '../Model/connction.php'

include 'class_motor.php'



    $motor = new motor();
    
        //Criar itens set

        $motor->setmotor($_POST['motor']);
        $motor->setnumeracao_motor($_POST['numeracao_motor']);
        $motor->setdescricao_motor($_POST['descricao_motor']);
        $motor->setbase($_POST['base']);
    
        //Criar resto dos itens get
    
        $nome       = $motor->getmotor();
        $numeracao  = $motor->getnumeracao_motor();
        $descricao  = $motor->getdescricao_motor();
        $nr_base    = $motor->getbase();

        if(mysqli_query($con, "Insert into motor( motor, numeracao_motor, descricao_motor, base)
        values( '$nome','$numeracao','$descricao', '$nr_base)'"))

        {
            echo"<script>alert('Cadastro realizado com sucesso');</script>";
            echo"<script>window.location='teste.php'</script>">

        }
        else{
            echo"<script>alert('Houve um erro na
        }
?>