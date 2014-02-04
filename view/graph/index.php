<?php
require_once '../../controller/LoginController.php';

$login = new LoginController();
?>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title> Avaliação Docente &middot;</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="Vinicius" content="">

        <!-- Estilos -->
        <link href="../../estilo/bootstrap/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>
        <link href="../../estilo/bootstrap/bootstrap-responsive.css" rel="stylesheet">

        <!--Icones -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../estilo/bootstrap/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../estilo/bootstrap/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../estilo/bootstrap/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../../estilo/bootstrap/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../../estilo/bootstrap/ico/favicon.png">
    </head>

    <body>
    <center>

    </center>
    <br />
    <br />
    <div class="container">
        <!-- Form de Login -->
        <form method="post" class="form-signin">
            <div  style="padding-left: 250px;padding-top: -5px" >
                <a href="../../index.php"><i class="icon-home"></i>Início</a>
            </div>
            <h2 class="form-signin-heading">Efetue seu login</h2>
            <input type="text" name="login" class="input-block-level" placeholder="Login" required>
            <input type="password" name="senha" class="input-block-level" placeholder="Senha" required>
            <button class="btn btn-large btn-primary" name="btnOk" type="submit">Logar </button>
        </form>
    </div>
    <?php if (isset($_GET['erro']) and $_GET['erro'] == 'login') { ?>
        <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Ops! :(</strong> Login ou senha errados.
        </div>
    <?php } ?>
    <?php if (isset($_GET['erro']) and $_GET['erro'] == 'logout') { ?>
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Até mais :)</strong> Deslogado com sucesso.
        </div>
    <?php } ?>

    <?php
    if (isset($_REQUEST['btnOk'])) {
        $login->loginAction();
    }
    ?>

</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="../../estilo/bootstrap/js/jquery.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-transition.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-alert.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-modal.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-dropdown.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-scrollspy.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-tab.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-tooltip.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-popover.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-button.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-collapse.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-carousel.js"></script>
<script src="../../estilo/bootstrap/js/bootstrap-typeahead.js"></script>
</body>
</html>
