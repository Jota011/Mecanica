<?php
require '../Model/connection.php';
include_once '../Templates/header.php';
?>
<body>
    <div class="container">
        <h2>Cadastro de Serviço</h2>
        <form action="">
            <input type="date">
            <select name="turno" id="turno"> <!--TURNO É PERIODO NO DATABASE-->
                <option value="">Selecione Turno</option>
                <option value="Matutino">Matutino</option>
                <option value="Vespertino">Vespertino</option>
                <option value="Noturno">Noturno</option>
            </select>
            <input type="text" name="turma" placeholder="Turma...">
            <select name="veiculo" id="veiculo">
                <option value="">Selecione Veículo</option>
                <?php
                ?>
            </select>
        </form>
    </div>
</body>