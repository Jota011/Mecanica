<?php
session_start();
include_once '../Templates/header.php';
include_once '../Model/connection.php';
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
        <div class="menu_principal">MENU PRINCIPAL</div>
        <Br>

        <div class="Buttons">
            <a class="botao_home" href="cadServicoView.php">Cadastro de Serviço</a>
            <a class="botao_home" href="cadCarroView.php">Cadastro de Veiculo</a>
            <a class="botao_home" href="cadmotorView.php">Cadastro de Motor</a>
            <br>
            <a class="botao_home" href="consServicoView.php">Consultar Serviços</a>
            <a class="botao_home" href="consCarroView.php">Consultar Veiculos</a>
            <a class="botao_home" href="consMotorView.php">Consultar Motores</a>
        </div>

        <style>
            /*testes*/

            .Buttons {
                position: relative;
                top: 130px;
                border-right: 100px;
                border-top: 10px;
                border-width: 100px;

            }

            .botao_home {
                color: blue;
                border-color: black;
                border-radius: 10px;
                background-color: white;
                align-items: center;
                cursor: pointer;
                padding: 80px 80px;
                display: inline-block;
                margin: 30px 30px;
                width: 370px;
            }

            @media(min-width: 600px) and (max-width: 768px) {
                .botao_home {
                    width: 180px;
                }
            }


            @media(min-width: 768px) and (max-width: 992px) {
                .botao_home {
                    width: 200px;
                }
            }

            @media(min-width: 922px) and (max-width: 1200px) {
                .botao_home {
                    width: 200px;
                    height: 200px;
                }
            }

            .home {
                text-align: center;
            }
        </style>

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
    </script>

</body>

</html>