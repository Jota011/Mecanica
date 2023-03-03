<?php   
    if(isset($POST['submit']))
    {
        print_r($_POST['descricao_motor']);
        print_r($_POST['id_motor']);
    }
?>
<link rel="stylesheet" href="teste.css">
<body>
<div class="">
    <div class="box">
        <form method="POST" action="teste.php" >
            <fieldset>
               <legend> Cadastro de motor</legend>
               <br>
                <div class="inputBox">
                <input type="text" name= "motor" id="motor" class= "inputMotor" required>
                <label for="cod">Motor</label>

                <div class="inputBox">
                <input type="text" name= "numeracao_motor" id="numeracao_motor" class= "inpuNumeracaoMotor" required>
                <label for="cod">Numeracão do motor</label>


                <div class="inputBox">
                <input type="text" name= "descricao_motor" id="descricao_motor" class= "inputDescricaoMotor" required>
                <label for="cod">Descrição do motor</label>

           
                <div class="inputBox">
                <input type="text" name= "base" id="base" class= "inputBase" required>
                <label for="cod">Base</label>

               </div>
               <br><br>
               <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
 