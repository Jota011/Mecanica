<?php   
if(isset($POST['submit']))
{
    print_r($_POST['desc_veiculo']);
    print_r($_POST['id_veiculo']);
}

?>
<link rel="stylesheet" href="teste.css">
<body>
<div class="">
    <div class="box">
        <form action="POST" action="teste.php"> <!-- colocar o banco de dados correto-->
            <fieldset>
               <legend> Cadastro de motor</legend>
               <br>
               <div class="inputBox">
                <input type="text" name= "Código do motor" id="cod" class= "inputMotor" required>
                <label for="cod">Código do motor</label>
                <br><br>
                <div class="inputBox">
                <input type="text" name= "Descrição" id="email" class= "inputMotor" required>
                <label for="cod">Descrição</label>

               </div>
               <br><br>
               <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
 