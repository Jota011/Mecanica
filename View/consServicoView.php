<?php
require '../Model/connection.php';
include '../Templates/header.php';
?>
<!--CONSULTA SERVICO-->
<body>
    <div class="container">
        <table class="table">
            <tr>
                <th scope="col">DATA</th>
                <th scope="col">TURNO</th>
                <th scope="col">TURMA</th>
                <th scope="col">VEÍCULO</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">RESPONSÁVEL</th>
            </tr>

            <body>
                <tr>
                    <?php
                    require '../Model/connection.php';
                    $sql = "SELECT * FROM ordem_servico ORDER BY id_os";
                    $query = $mysqli->query($sql);
                    while($row = mysqli_fetch_assoc($query)){
                        echo  '<td scope="row">' . $row['data_os'] . '</td>'
                            . '<td scope="row">' . $row['periodo'] . '</td>'
                            . '<td scope="row">' . $row['turma'] . '</td>'
                            . '<td scope="row">' . $row['veiculo'] . '</td>'
                            . '<td scope="row">' . $row['descricao_atividade'] . '</td>'
                            . '<td scope="row">' . $row['responsavel'] . '</td>';
                     }
                    ?>
                </tr>
            </body>
        </table>
    </div>
</body>
</html>