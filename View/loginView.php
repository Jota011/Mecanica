<?php 
require_once '../Templates/header.php'; 
?>
<link rel="stylesheet" href="../Public/CSS/loginView.css">
<body>
        <div class="hero is-fullheight">
                <div class="hero-body is-justify-content-center is-align-items-center">
                        <form action="../Controller/validaLogin.php" method="post">
                                <div class="columns is-flex is-flex-direction-column box">
                                        <div class="column">
                                                <label for="pin">PIN PARA ACESSO</label>
                                                <br>
                                                <input class="input is-info" id="pin" type="password" name="pinLogin" placeholder="Q1W2E3R4..." required>
                                        </div>
                                        <div class="column">
                                                <button class="button is-info is-fullwidth" type="submit" name="entrar">ENTRAR</button>
                                        </div>
                                        <span class="tag is-info is-light">rangel_cabral@estudante.sesisenai.org.br</span>
                                </div>
                        </form>
                </div>
        </div>
</body>
</html>