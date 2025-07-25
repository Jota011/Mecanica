<?php
require '../Model/connection.php';
include '../Templates/header.php';
if (isset($_GET['cadastra'])) {
    echo '<script>alert("INCLUSÃO REALIZADA COM SUCESSO!")</script>';
}
?>
<!--CONSULTA SERVICO-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- estilo que vem do index.css -->
    <link rel="stylesheet" href="../Public/CSS/estiloHome.css">
    <link rel="stylesheet" href="../Public/CSS/cadVeiculos.css">

    <link rel="stylesheet" href="../Public/CSS/estiloCarro.css">



    <link rel="icon" href="../Public/Imagens/senai_logo.png" type="image/icon type">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" href="../Public/Imagens/senai_logo.png" type="image/icon type">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>

    <nav class="sidebar close">
        <header>

            <div>
                <a href="homeView.php">
                    <button class="text_senai">
                        <img src="../Public/Imagens/senai_logo.png">
                    </button>
                </a>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="cadCarroView.php">

                            <i class='bx bxs-car-mechanic icon'></i>
                            <span class="text nav-text ">Cadastro de Carro</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="consCarroView.php">

                            <i class='bx bx-search-alt-2 icon'></i>

                            <span class="text nav-text ">Consulta de Carro</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="cadMotorView.php">

                            <i class='bx bxs-wrench icon'></i>
                            <span class="text nav-text ">Cadastro de Motor</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="consMotorView.php">

                            <i class='bx bx-search-alt-2 icon'></i>

                            <span class="text nav-text ">Consulta de Motor</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="cadServicoView.php">

                            <i class='bx bx-id-card icon '></i>
                            <span class="text nav-text ">Cadastro de Serviço</span>

                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="consServicoView.php">

                            <i class='bx bx-search-alt-2 icon'></i>

                            <span class="text nav-text ">Consulta de Servico</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <button class="text nav-text button_logout" onclick="deslogar();return false">Logout</button>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    <section class="home">
    <?php
        if (isset($_GET['funcao']) && $_GET['funcao'] == 'editar') {
            echo '<div class="menu_principal">EDITAR SERVICO</div>';
        } else {
            echo '<div class="menu_principal">CADASTRO DE SERVICO</div>';
        }
        ?>
        <Br>
    </section>
    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            procurar = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        procurar.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        //SERVICO------------------------------------------------------------------------------

        function deletarServico(idServico) {
            if (idServico != null) {
                if (confirm("DESEJA DELETAR O SERVICO SELECIONADO?") == true) {
                    var end = '../Controller/deletar.php?idServico=' + idServico;
                    window.location.href = end;
                } else {
                    var end = '../View/consMotorView.php';
                    window.location.href = end;
                }
            }
        }

        function editarServico(idServico, descricao_atividade, data_os, periodo, turma, veiculo, responsavel) {
            var end = '../View/cadServicoView.php?funcao=editar&&idServico=' + idServico +
                '&&descricao_atividade=' + descricao_atividade +
                '&&data_os=' + data_os +
                '&&periodo=' + periodo +
                '&&turma=' + turma +
                '&&veiculo=' + veiculo +
                '$$responsavel=' + responsavel;
            window.location.href = end;
        }
    </script>

    <body>
        <div class="container">
            <table class="table">
                <tr>
                    <th scope="">#</th>
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
                            echo '<tr>'
                                . '<td scope="">' . $row['id_os'] . '</td>'
                                . '<td scope="">' . $row['data_os'] . '</td>'
                                . '<td scope="">' . $row['periodo'] . '</td>'
                                . '<td scope="">' . $row['turma'] . '</td>'
                                . '<td scope="">' . $row['veiculo'] . '</td>'
                                . '<td scope="">' . $row['descricao_atividade'] . '</td>'
                                . '<td scope="">' . $row['responsavel'] . '</td>'

                                . '<td> '
                                . '<a class="bx bx-edit" onclick="editarServico(' . $row['id_os'] . ',\'' . $row["data_os"] . '\',\'' . $row["periodo"] . '\',\'' . $row["turma"] . '\',\'' . $row["veiculo"] . '\',\'' . $row["descricao_atividade"] . '\',\'' . $row["responsavel"] . '\')"></a>'
                                . '<a class="bx bx-trash-alt" style="padding: 12px;" onclick="deletarServico(' . $row["id_os"] . ')"></a>'
                                . '</td>'

                                . '</tr>';
                        }
                        ?>
                    </tr>
                </body>
            </table>
        </div>
    </body>
</body>

</html>