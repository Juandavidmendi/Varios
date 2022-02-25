<main class="container">

    <section class="col-md-12 text-center">
        <h1>Listado de Usuarios</h1>

        <div class="col-md-12 m-2 d-flex justify-content-between">
            <h2>Usuarios</h2>
            <a class="btn btn-success" href="?controller=user&method=add"> Agregar <i class="fas fa-user-plus fa-lg"></i></a>
        </div>

        <section class="col-md-12 flex-nowrap">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Identificacion</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        
                        <th>Correo</th>
                        <th>Direccion</th>
                        
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($users as $user) : ?>
                    <tr>
                        <td> <?php echo $user->idUsuario ?> </td>
                        <td> <?php echo $user->nombreUsuario ?></td>
                        <td> <?php echo $user->apellidoUsuario ?></td>
                       
                        <td> <?php echo $user->correoUsuario ?></td>
                        <td> <?php echo $user->direccionUsuario ?></td>
                 
                        <td> <?php echo $user->rolUsuario ?></td>
                        <td>

                            <a class="btn btn-primary mr-1" href="?controller=user&method=edit&idUsuario=<?php echo $user->idUsuario ?>"> <i class="far fa-edit"></i></a>

                            <a class="btn btn-danger mr-2" href="?controller=user&method=delete&idUsuario=<?php echo $user->idUsuario ?>"> <i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </section>
</main>
<footer class="footer text-center text-muted">
                Biblioteca Jaime Pardo Leal</a>.
            </footer>