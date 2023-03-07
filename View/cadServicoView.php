<?php
require '../Model/connection.php';
include_once '../Templates/header.php';
?>
<body>
    <div class="container">
        <h2>Cadastro de Serviço</h2>
        <form action="">
            <label for="data">DATA</label>
            <input type="date" id="data">
            <select name="turno" id="turno"> <!--TURNO É PERIODO NO DATABASE-->
                <option value="">Selecione Turno</option>
                <option value="Matutino">Matutino</option>
                <option value="Vespertino">Vespertino</option>
                <option value="Noturno">Noturno</option>
            </select>
            <input type="text" name="turma" placeholder="Turma...">
            <select name="veiculo" id="veiculo" style="max-width:200px;">
                <option value="">Selecione Veículo</option>
                <?php
                $sql = "SELECT * FROM veiculos";
                $query = $mysqli->query($sql);
                while ($row = mysqli_fetch_assoc($query)){
                    echo $row;
                    echo '<option value="'. $row['id_veiculo'] .'">' . $row['marca']. ' ' . $row['modelo'] . " - " .  $row['cor'] . " (" .$row['descricao'] . ")" . "</option>";
                }
                ?>
            </select>
            <textarea placeholder="Atividades realizadas..." name="descricao" id="descricao" cols="30" rows="10" style="resize:none;"></textarea>
            <input type="text" placeholder="Responsável pela aula" value="<?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : ''; ?>">
            <div id="botoes">
                <input type="submit" value="Cadastrar Serviço">
            </div>
        </form>
    </div>
</body>