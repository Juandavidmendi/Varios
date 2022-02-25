






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
    <link href="assets/dist/css/ANCHO.css" rel="stylesheet">
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
                
            <main class="container, caja">

    <div class="row">
        <h1 class="col-12 d-flex justify-content-center">Esta cambiando su contraseña </h1>
    </div>

    <section class="row mt-5">

        <div class="card w-50 m-auto">

            <div class="card-header container">
            </div>

            <div class="card-body">
            <main class="container">

<div class="row">
    <h1 class="col-12 d-flex justify-content-center">Recuperacion de contraseña</h1>
</div>

<section class="row mt-5">

    <div class="card w-50 m-auto">

        <div class="card-header container">
            <h2 class="m-auto">Editar Contraseña</h2>
        </div>

        <div class="card-body">
            <form method="POST" action="?controller=user&method=update2">

                <input type="hidden" name="claveUsuario" class="form-control" value="<?php echo $data[0]->claveUsuario; ?>">

                <div class="form-group">   
                    <label for="firstname">cambia tu contraseña</label>
                    <input type="text" name="claveUsuario" class="form-control" placeholder="Ingrese su nueva contraseña" value="<?php echo $data[0]->claveUsuario; ?>">
                </div>

        


                <div class="form-group">
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </form>

        </div>

    </div>
</section>
</main>

            </div>

        </div>
    </section>
</main>
              
            </div>
       

    </div>

    <script src="assets/assets/libs/jquery/dist/jquery.min.js "></script>

    <script src="assets/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>

    <script>
        $(".preloader ").fadeOut();
    </script>
</body>




</html>