<link rel="stylesheet" href="../Public/CSS/cadmotor.css">
<body>
<div class="">
    <div class="box">
        <form method="POST" action="../Model/SQL/inclusao_motor.php" >
            <fieldset>
               <legend> Cadastro de motor</legend>
               <br>
               
                <div class="inputBox">
                <input type="text" name= "numeracao_motor" id="numeracao_motor" class= "inputNumeracaoMotor" required>
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
 