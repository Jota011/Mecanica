<?php
session_start();
include_once '../Templates/header.php';
include_once '../Model/connection.php';
$MYSQLI = "SELECT - FROM ordem_servico";

if (isset($_GET['editado'])){
    echo '<script>alert("Dados de veículo alterados")</script>';
}
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
    <script src="../Controller/gerenteController.js"></script>
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
        <div class="menu_principal">CONSULTAR CARROS</div>
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
    </script>

    <body>
        <div class="container" style="margin-top:160px;margin-left:299px;padding:50px;">
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
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo '<tr>'
                            . '<td scope="row">' . $row['id_veiculo'] . '</td>'
                            . '<td scope="row">' . $row['marca'] . '</td>'
                            . '<td scope="row">' . $row['modelo'] . '</td>'
                            . '<td scope="row">' . $row['cor'] . '</td>'
                            . '<td scope="row">' . $row['descricao'] . '</td>'

                            . '<td> '
                            . '<a class="bx bx-edit" onclick="editarVeiculo('.$row['id_veiculo'].',\''.$row["marca"].'\',\''.$row["modelo"].'\',\''.$row["cor"].'\',\''.$row["descricao"].'\')"></a>'
                            . '<a class="bx bx-trash-alt" style="padding: 12px;" onclick="deletarVeiculo('.$row["id_veiculo"].')"></a>'
                            .'</td>'

                            . '</tr>';
                    }
                    ?>
                </body>
            </table>
        </div>
    </body>
</body>

</html>