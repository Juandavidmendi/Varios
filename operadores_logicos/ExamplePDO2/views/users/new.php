

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
        <h1 class="col-12 d-flex justify-content-center">Esta creando un nuevo usuario </h1>
    </div>

    <section class="row mt-5">

        <div class="card w-50 m-auto">

            <div class="card-header container">
                <h2 class="m-auto">Agregar Usuario</h2>
            </div>

            <div class="card-body">
                <form method="POST" action="?controller=user&method=save">

                    <div class="d-flex justify-content-around align-content-center">

                        <div class="form-group">
                            <label for="nombreUsuario"> Nombre</label>
                            <input type="text" name="nombreUsuario" class="form-control" minlength="2" maxlength="12" autofocus="autofocus" placeholder=" nombre Completo" required>
                        </div>

                        <div class="form-group">
                            <label for="apellidoUsuario"> Apellido</label>
                            <input type="text" name="apellidoUsuario"  class="form-control" minlength="2" maxlength="12" placeholder=" apellido Completo" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around align-content-center">

                        <div class="form-group">
                            <label for="idUsuario">Identificacion</label>
                            <input type="text" name="idUsuario" class="form-control" minlength="2" maxlength="12" placeholder=" identificaion" required>
                        </div>

                        <div class="form-group">
                            <label for="direccionUsuario">Direccion</label>
                            <input type="text" name="direccionUsuario" minlength="2" maxlength="12" class="form-control" placeholder="su direccion" required>
                        </div>

                    </div>
                      <div class="d-flex justify-content-around align-content-center">

                      <div class="form-group">
                            <label for="correoUsuario">Email</label>
                            <input type="email" id="correoUsuario" name="correoUsuario" class="form-control" minlength="2" maxlength="40" placeholder="su email" required>
                        </div>

                        <div class="form-group">
                            <label for="correoUsuario">Confirmar Email</label>
                            <input type="email" id="vercorreoUsuario" class="form-control" minlength="2" maxlength="40" placeholder="su email" required >
                        </div>

                    </div>
                    


                    <div class="d-flex justify-content-around align-content-center">

                        <div class="form-group">
                            <label for="claveUsuario">Contraseña</label>
                            <input type="password" id="claveUsuario" name="claveUsuario" class="form-control" placeholder=" su contraseña" required>
                        </div>

                        <div class="form-group">
                            <label for="claveUsuario">Contraseña</label>
                            <input type="password" id="confirmarclaveUsuario" class="form-control" placeholder=" su contraseña" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around align-content-center">
                        <label>Rol</label>
                      
                        <select class="form-control" name="rolUsuario">
                            <option value="">Seleccione...</option>
                           

                            <option value="Estudiante">Estudiante</option>

                            <option value="Profesor">Profesor</option>
                        </select>
                    </div>                    

                    <div>

                    <p class ="letraf">Al hacer clic en "Registrarte", aceptas nuestras <a href="#" class="text-danger">Condiciones, la Política de datos y la Política de cookies.</a> Es posible que te enviemos notificaciones por correo, que puedes desactivar cuando quieras.</p>
                    </div>
                    <div class="d-flex justify-content-around align-content-center">
                    <div class="form-group">
                        <button class="btn btn-primary">Regristrate</button>
                    </div>
                   
                  
                    </div>
                </form>
                <div class="form-group">
                        <button class="btn btn-secondary" onclick="location.href='?controller=home&method=index'">cancelar</button>
                    </div>
                

            </div>

        </div>
    </section>
</main>
              
            </div>
       

    </div>

    <script src="assets/assets/libs/jquery/dist/jquery.min.js "></script>

    <script src="assets/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <script src="assets/js/validaciones.js"></script>

    <script>
        $(".preloader ").fadeOut();
    </script>
</body>




</html>