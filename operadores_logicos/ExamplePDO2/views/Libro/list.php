<main class="container">

    <section class="col-md-12 text-center">
        <h1>Listado de Libros</h1>

        <div class="col-md-12 m-2 d-flex justify-content-between">
            <h2>Libros</h2>
            <a class="btn btn-success" href="?controller=movie&method=add"> Agregar <i class="fas fa-user-plus fa-lg"></i></a>
        </div>

        <section class="col-md-12 flex-nowrap">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombres</th>
                        <th>ISBN</th>
                        <th>stan Libro</th>
                        <th>ID Autor</th>
                        <th>ID Categoria</th>
                        <th>ID Estado</th>
                        <th>ID Editorial</th>
                        <th>Portada</th>
                        
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($movie as $movie) : ?>
                    <tr>
                        <td><?php echo $movie->idLibro ?></td>
                        <td><?php echo $movie->nombreLibro ?></td>
                        <td><?php echo $movie->ISBN ?></td>
                        <td><?php echo $movie->stanLibro ?></td>
                        <td><?php echo $movie->Autor_idAutor1 ?></td>
                        <td><?php echo $movie->Categoria_idCategoria ?></td>
                        <td><?php echo $movie->Estado_idEstado ?></td>
                        <td><?php echo $movie->Editorial_idEditorial ?></td>
                        <td><img height= "100px" src="data:imagen/jpg;base64,<?php echo base64_encode($row['imagen']);?>"></td>
                      
                        <td>
                            <a class="btn btn-primary mr-1" href="?controller=movie&method=edit&idLibro=<?php echo $movie->idLibro ?>"> <i class="far fa-edit"></i></a>
                            <a class="btn btn-danger mr-2" href="?controller=movie&method=delete&idLibro=<?php echo $movie->idLibro ?>"> <i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </section>
</main>