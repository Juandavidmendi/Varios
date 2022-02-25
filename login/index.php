<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
    href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
            $(function () {

                var login_window = $("#login-dialog").dialog({autoOpen: false,
                    height: 280,
                    width: 520,
                    modal: true,
                    closeText: '',
                    close: function () {
                        register_window.dialog("close");
                    }

                });

                $("#btn-login").button().on("click", function () {
                    login_window.dialog("open");
                });

                var register_window = $("#register-dialog").dialog({autoOpen: false,
                    height: 530,
                    width: 520,
                    modal: true,
                    closeText: '',
                    close: function () {
                        register_window.dialog("close");
                    }

                });

                $("#btn-register").button().on("click", function () {
                    register_window.dialog("open");
                });
            });

        </script>
        <script src="login-registration.js"></script>
        
</head>

<body>
<div role="navigation" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="https://www.baulphp.com" class="navbar-brand">BAULPHP</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="https://www.baulphp.com">Portada</a></li>
           
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="demo-container">
        <h2>Sistema de registro y login basado en AJAX, jQuery lightbox</h2>
        <div class="login-registration-menu">
            <input type="button" value="Iniciar Sesión" id="btn-login" class="btn btn-primary"> <input
                type="button" value="Registrar" id="btn-register" class="btn btn-warning">
        </div>
        <div class="thank-you-registration">
        </div>
        <?php 
            require_once "login-form.php";
            require_once "registration-form.php";
        ?>
    </div>
</body>
</html>