<?php
require_once '../Templates/header.php';
require '../Model/connection.php';

?>
<body>
    <div class="cadCarroView">

        <form class="form-horizontal" method="post" action="../Model/inclusao_Carro.php">
         <div class="container-fluid">                
            <div class="panel-1">
                <div class="cabecalho">Cadastro de veiculo</div>
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
</body>
