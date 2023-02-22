<?php require_once '../Templates/header.php'; ?>
<link rel="stylesheet" href="../Public/CSS/loginView.css">
<body>
        <div class="hero is-fullheight">
                <div class="hero-body is-justify-content-center is-align-items-center">
                        <form action="../Controller/validaLogin.php" method="post">
                                <div class="columns is-flex is-flex-direction-column box">
                                        <div class="column">
                                                <label for="pin">PIN PARA ACESSO</label>
                                                <br>
                                                <input class="input is-info" id="pin" type="text" name="pinLogin" placeholder="1234..." required>
                                        </div>
                                        <div class="column">
                                                <button class="button is-info is-fullwidth" type="submit" name="entrar">ENTRAR</button>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>
</body>
</html>