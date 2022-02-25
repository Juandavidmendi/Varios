<main class="container">

    <section class="col-md-12 text-center">
        <h1>Listado de Autores</h1>

        <div class="col-md-12 m-2 d-flex justify-content-between">
            <h2>Autores</h2>
            <a class="btn btn-success" href="?controller=Autor&method=adppd"> Agregar<i class="fas fa-user-plus fa-lg"></i></a>
        </div>

        <section class="col-md-12 flex-nowrap">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Autores</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($AUTOR as $autor) : ?>
                    <tr>
                        <td> <?php echo $autor->idAutor ?> </td>
                        <td> <?php echo $autor->nombreAutor ?></td>
                        <td>
                            <a class="btn btn-primary mr-1" href="?controller=Autor&method=edit&idAutor=<?php echo $autor->idAutor ?>"> <i class="far fa-edit"></i></a>

                            <a class="btn btn-danger mr-2" href="?controller=Autor&method=delete&idAutor=<?php echo $autor->idAutor ?>"> <i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </section>
</main>