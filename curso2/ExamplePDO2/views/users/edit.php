<main class="container">

    <div class="row">
        <h1 class="col-12 d-flex justify-content-center">Editar roles</h1>
    </div>

    <section class="row mt-5">

        <div class="card w-50 m-auto">

            <div class="card-header container">
                <h2 class="m-auto">Editar rol</h2>
            </div>

            <div class="card-body">
                <form method="POST" action="?controller=user&method=update">

                    <input type="hidden" name="idUsuario" class="form-control" value="<?php echo $data[0]->idUsuario; ?>">

                    <div class="form-group">   
                        <label for="firstname">Rol</label>
                        <input type="text" name="nombreUsuario" class="form-control" placeholder="Ingrese el rol" value="<?php echo $data[0]->nombreUsuario; ?>">
                    </div>

                    <div class="form-group">   
                        <label for="firstname">Rol</label>
                        <input type="text" name="apellidoUsuario" class="form-control" placeholder="Ingrese el rol" value="<?php echo $data[0]->apellidoUsuario; ?>">
                    </div>

                    <div class="form-group">   
                        <label for="firstname">Rol</label>
                        <input type="text" name="correoUsuario" class="form-control" placeholder="Ingrese el rol" value="<?php echo $data[0]->correoUsuario; ?>">
                    </div>

                    <div class="form-group">   
                        <label for="firstname">Rol</label>
                        <input type="text" name="direccionUsuario" class="form-control" placeholder="Ingrese el rol" value="<?php echo $data[0]->direccionUsuario; ?>">
                    </div>

                


                    <div class="form-group">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>

            </div>

        </div>
    </section>
</main>