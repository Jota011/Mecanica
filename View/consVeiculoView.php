<?php
include_once '../Templates/header.php';
?>
<!--CONSULTA VEÍCULO-->
<body>
    <div class="container">
        <table class="table">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Cor</th>
                <th scope="col">Descrição</th>
            </tr>

            <body>    
            <?php
                require '../Model/connection.php';
                $sql = "SELECT * FROM veiculos ORDER BY id_veiculo";
                $query = $mysqli->query($sql);
                while($row = mysqli_fetch_assoc($query)){
                    echo'<tr>'
                        . '<td scope="row">' . $row['id_veiculo'] . '</td>'
                        . '<td scope="row">' . $row['marca'] . '</td>'
                        . '<td scope="row">' . $row['modelo'] . '</td>'
                        . '<td scope="row">' . $row['cor'] . '</td>'
                        . '<td scope="row">' . $row['descricao'] . '</td>'
                        . '</tr>';
                }
            ?>
            </body>
       </table> 
    </div>
</body>
</html>