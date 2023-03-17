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
    <link rel="stylesheet" href="../Public/CSS/estiloCarro.css">

    
	
	<link rel="icon" href="../Public/Imagens/senai_logo.png" type="image/icon type">
    
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>

    <nav class="sidebar close">
        <header>
            
        <div >             
            <a href="homeView.php">
                    <button class="text_senai" >
                        <img src="../Public/Imagens/senai_logo.png" >
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
                        <a href="consVeiculoView.php">
                            
							<i class='bx bxs-car-mechanic icon'></i>
                            <span class="text nav-text ">Cadastro de Carro</span>                            
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="?page=cadastro_cliente">
                        
							<i class='bx bxs-wrench icon'></i>
                            <span class="text nav-text ">Cadastro de Motor</span>                            
                        </a>
                    </li>

                    
                    <li class="nav-link">
                        <a href="?page=cadastro_tecnico ">
                        
                        <i class='bx bx-id-card icon '></i>
                            <span class="text nav-text ">Cadastro de Serviço</span>                            
                        </a>
                    </li>

                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <button class="text nav-text button_logout" onclick = "deslogar();return false">Logout</button>
                    </a>
                </li>        
            </div>
        </div>
    </nav>
    <section class="home">
    <div class="menu_principal">MENU PRINCIPAL</div>
    <Br>
    </section>
    <script>
        
      const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      procurar = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");          

            toggle.addEventListener("click" , () =>{
                sidebar.classList.toggle("close");
            })

            procurar.addEventListener("click" , () =>{
                sidebar.classList.remove("close");
            })

    </script>


</body>
</html>
<body>

    <div id='fundo_cad'>
        <div class="cadCarroView">
            <form id="main-container" method="post" action="../Model/inclusao_Carro.php">
            <div class="container-fluid">                
                <div class="panel-1">
                    <div class="cabecalho"></div>
                        <div class="panel-2">
                            
                                <!-- Nome do Veiculo -->
                            <div class="campo">
                                <label for="car" class="preenchimento">Modelo do veiculo</label>
                                <div class="col-xs-6">
                                    <input type="text" class="input" name="modelo_veiculo" id="modelo" placeholder="Modelo" />
                                </div>
                            </div>


                                <!-- Marca do Veiculo --> 
                            <div class="campo">
                                <label for="codigo" class="preenchimento">Marca do veiculo</label>
                                <div class="col-xs-6">
                                    <input type="text" class="input" name="marca_veiculo" id="marca" placeholder="Marca" />
                                </div>

                                <!-- Cor do Veiculo --> 
                            <div class="campo">
                                <label for="codigo" class="preenchimento">Cor do veiculo</label>
                                <div class="col-xs-6">
                                    <input type="text" class="input" name="cor_veiculo" id="cor" placeholder="Coloração" />
                                </div>

                                    <!-- Descrição do Veiculo --> 
                            <div class="campo">
                                <label for="codigo" class="campo1">Descrição do veiculo</label>
                                <div class="col-xs-6">
                                    <input type="text" class="input" name="desc_veiculo" id="desc" placeholder="Descrição" />
                                </div>


                            <div class="campo2">
                                <div class="botoes_save">
                                    <button type="submit" class="botao_save" name="save">Salvar</button>
                                    <button type="reset"  class="botao_canc">Cancelar</button> 

                                </div>
                            </div>
                        </div>
                    </div>                             
            </div>   
            </form>
        </div>        
    </div>
</body>
