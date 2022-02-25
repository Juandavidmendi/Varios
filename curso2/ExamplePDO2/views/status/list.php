<main class="container">

    <section class="col-md-12 text-center">
        <h1>Listado de Estados</h1>

        <div class="col-md-12 m-2 d-flex justify-content-between">
            <h2>Estados</h2>
            <a class="btn btn-success" href="?controller=status&method=add"> Agregar <i class="fas fa-user-plus fa-lg"></i></a>
        </div>

        <section class="col-md-12 flex-nowrap">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($status as $state) : ?>
                    <tr>
                        <td> <?php echo $state->id ?> </td>
                        <td> <?php echo $state->name ?></td>
                        <td>
                            <a class="btn btn-primary mr-1" href="?controller=status&method=edit&id=<?php echo $state->id ?>"> <i class="far fa-edit"></i></a>

                            <a class="btn btn-danger mr-2" href="?controller=status&method=delete&id=<?php echo $state->id ?>"> <i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </section>
</main>