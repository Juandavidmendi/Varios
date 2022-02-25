<main class="container">

    <section class="col-md-12 text-center">
        <h1>Listado de Categorias</h1>

        <div class="col-md-12 m-2 d-flex justify-content-between">
            <h2>Categorias</h2>
            <a class="btn btn-success" href="?controller=role&method=add"> Agregar <i class="fas fa-user-plus fa-lg"></i></a>
        </div>

        <section class="col-md-12 flex-nowrap">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Roles</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($roles as $role) : ?>
                    <tr>
                        <td> <?php echo $role->idCategoria ?> </td>
                        <td> <?php echo $role->tipoCategoria ?></td>
                        <td>
                            <a class="btn btn-primary mr-1" href="?controller=role&method=edit&idCategoria=<?php echo $role->idCategoria ?>"> <i class="far fa-edit"></i></a>

                            <a class="btn btn-danger mr-2" href="?controller=role&method=delete&idCategoria=<?php echo $role->idCategoria ?>"> <i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </section>
</main>