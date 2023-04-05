<?php
require_once '../Templates/header.php';
require '../Model/connection.php';

?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- estilo que vem do index.css -->
    <link rel="stylesheet" href="../Public/CSS/estiloHome.css">
    <link rel="stylesheet" href="../Public/CSS/cadVeiculos.css">

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
            echo '<div class="menu_principal">EDITAR MOTOR</div>';
        } else {
            echo '<div class="menu_principal">CADASTRO DE MOTOR</div>';
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

        function editar() {
            var form = document.getElementById("main-container");
            var idMotor = form.idMotor.value,
                numeracao_motor = form.numeracao_motor.value
            descricao_motor = form.descricao_motor.value
            base = form.base.value;

            form.action = "../Controller/editar.php?idMotor=" + idMotor +
                '&&numeracao_motor=' + numeracao_motor +
                '&&descricao_motor=' + descricao_motor +
                '&&base=' + base;

            form.submit;
        }
    </script>
</body>

</html>
<!-- cadastro Motor-->

<body>
    <div class="container-page">
        <div id="fundo_cad">
            <div class="cadCarroView">
                <form id="main-container" method="POST" action="../Model/inclusao_motor.php">
                    <div class="clearfix">

                        <div class="campo">
                            <label for="car" class="preenchimento">Numeracão do Motor</label>
                            <input type="text" class="input" name="numeracao_motor" id="numeracao_motor" placeholder="Modelo" />
                        </div>
                        <div class="campo">
                            <label for="codigo" class="preenchimento">Descrição do Motor</label>
                            <input type="text" class="input" name="descricao_motor" id="descricao_motor" placeholder="Descrição do Motor" />
                        </div>
                        <div class="campo">
                            <label for="codigo" class="preenchimento">Base</label>
                            <input type="text" class="input" name="base" id="base" placeholder="Base" />
                        </div>
                        <div class="campo2">
                            <div class="botoes_save">
                                <?php
                                if (isset($_GET['funcao']) && $_GET['funcao'] == "editar") {

                                    echo '<button class="btn btn-danger ">Cancelar <a href="consMotorView.php"></a></button>';
                                    echo '<button type="submit" class="btn btn-success separacao_botao" onclick="editar()" name="submit">Editar</button>';
                                    
                                } else {

                                    echo '<button type="reset" class="btn btn-danger ">Cancelar <a href="#"></a></button>';
                                    echo '<button type="submit" class="btn btn-success separacao_botao" name="submit">Salvar</button>';

                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>