<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/assets/images/favicon.png">
    <title>Inicio de sesion</title>


    <link href="assets/dist/css/style.min.css" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper">

        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(assets/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(assets/assets/images/big/3.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="assets/assets/images/big/icon.png" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Ingresa</h2>
                        <p class="text-center">Ingresa tu correo y contraseña para ingresar</p>
                        <form class="mt-4" action="logica/loguear.php" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Correo</label>
                                        <input class="form-control" id="uname" type="text" placeholder="Ingresa tu correo" name="correoUsuario">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd"> contraseña </label>
                                        <input class="form-control" id="pwd" type="password" placeholder="Ingresa tu contraseña " name="claveUsuario">
                                    </div>
                                </div>
                                <a href="?controller=Login&method=index">
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-block btn-dark">Inicia sesion</button></a>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    No tienes cuenta? <a href="?controller=User&method=add" class="text-danger">Registrate</a>

                                </div>

                                <a href="https://www.facebook.com/legal/terms/update"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="assets/assets/libs/jquery/dist/jquery.min.js "></script>

    <script src="assets/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>

    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html> -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="../ExamplePDO2/assets/css/inicio.css" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->

