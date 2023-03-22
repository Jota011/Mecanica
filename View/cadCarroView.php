<?php
require_once '../Templates/header.php';
require '../Model/connection.php';

if (isset($_GET['funcao'])){
    $_SESSION['funcao'] = $_GET['funcao'];
}
if (isset($_GET['idVeiculo']) && !empty($_GET['idVeiculo'])){
    $_SESSION['idVeiculo'] = $_GET['idVeiculo'];
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
        <div class="menu_principal">
        <?php 
            if (isset($_SESSION['funcao']) && $_SESSION['funcao'] == 'editar'){
                echo 'EDITAR VEÍCULO';
            } else {
                echo 'CADASTRO DE VEÍCULOS';
            }
        ?>    

        </div>
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

        function editar(){
            var form = document.getElementById("main-container");
            var idVeiculo = form.idVeiculo.value,
                modelo = form.modelo.value
                marca = form.marca.value
                cor = form.cor.value
                desc = form.desc.value;
            form.action = "../Controller/editar.php?idVeiculo="+idVeiculo
            + '&&modelo='+modelo
            + '&&marca='+marca
            + '&&cor='+cor
            + '&&desc='+desc;
        }
    </script>
</body>
</html>
<!-- cadastro carro-->
<body>
    <div class="container-page">
        <div id="fundo_cad">
            <div class="cadCarroView">
                <form id="main-container" method="post" action="../Model/inclusao_Carro.php">
                    <div class="clearfix">
                        <div class="campo">
                            <label for="codigo" class="preenchimento">Marca do veiculo</label>
                            <input type="text" class="input" name="marca_veiculo" id="marca" placeholder="Marca" value="<?php echo isset($_GET['marca']) ? $_GET['marca'] : '' ?>"/>
                        </div>
                        <div class="campo">
                            <input id="idVeiculo" type="hidden" value="<?php echo isset($_SESSION['idVeiculo']) ? $_SESSION['idVeiculo'] : '' ?>"> <!---NAO FUNCIONANDO--->
                            <label for="car" class="preenchimento">Modelo do veiculo</label>
                            <input type="text" class="input" name="modelo_veiculo" id="modelo" placeholder="Modelo" value="<?php echo isset($_GET['modelo']) ? $_GET['modelo'] : '' ?>"/>
                        </div>
                        <div class="campo">
                            <label for="codigo" class="preenchimento">Cor do veiculo</label>
                            <input type="text" class="input" name="cor_veiculo" id="cor" placeholder="Coloração" value="<?php echo isset($_GET['cor']) ? $_GET['cor'] : '' ?>"/>
                        </div>
                        <div class="campo">
                            <label for="codigo" class="campo1">Descrição do veiculo</label>
                            <input type="text" class="input" name="desc_veiculo" id="desc" maxlength="100" placeholder="Descrição curta..." value="<?php echo isset($_GET['descricao']) ? $_GET['descricao'] : '' ?>"/>
                        </div>
                        <div class="campo2">
                            <div class="botoes_save">
                                <button type="reset" class="btn btn-danger ">Cancelar</button>
                                 <?php 
                                    if (isset($_SESSION['funcao']) && $_SESSION['funcao'] == "editar"){
                                       echo '<button type="submit" class="btn btn-success separacao_botao" onclick="editar()" name="save">Editar</button>';
                                    }else{
                                        echo '<button type="submit" class="btn btn-success separacao_botao" name="save">Salvar</button>';
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