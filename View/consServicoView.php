<?php
require '../Model/connection.php';
include '../Templates/header.php';
?>
<!--CONSULTA SERVICO-->

<body>
    <div class="container">
        <table class="">
            <tr>
                <th scope="">DATA</th>
                <th scope="">TURNO</th>
                <th scope="">TURMA</th>
                <th scope="">VEÍCULO</th>
                <th scope="">DESCRIÇÃO</th>
                <th scope="">RESPONSÁVEL</th>
            </tr>

            <body>
                <tr>
                    <?php
                    require '../Model/connection.php';
                    $sql = "SELECT * FROM ordem_servico ORDER BY id_os";
                    $query = $mysqli->query($sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo  '<td scope="">' . $row['data_os'] . '</td>'
                            . '<td scope="">' . $row['periodo'] . '</td>'
                            . '<td scope="">' . $row['turma'] . '</td>'
                            . '<td scope="">' . $row['veiculo'] . '</td>'
                            . '<td scope="">' . $row['descricao_atividade'] . '</td>'
                            . '<td scope="">' . $row['responsavel'] . '</td>';
                    }
                    ?>
                </tr>
            </body>
        </table>
    </div>
</body>
</html>