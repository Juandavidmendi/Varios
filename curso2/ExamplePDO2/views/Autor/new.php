<main class="container">

    <div class="row">
        <h1 class="col-12 d-flex justify-content-center">Nuevo Autor</h1>
    </div>

    <section class="row mt-5">

        <div class="card w-50 m-auto">

            <div class="card-header container">
                <h2 class="m-auto">Agregar Autor</h2>
            </div>

            <div class="card-body">
                <form method="POST" action="?controller=Autor&method=save">

                    <div class="form-group">
                        <label for="nombreAutor">Autor</label>
                        <input type="text" name="nombreAutor" class="form-control" placeholder="Ingrese nombre de autor">
                        <label for="idAutor">Id</label>
                        <input type="text" name="idAutor" class="form-control" placeholder="Ingrese ID de autor">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>

            </div>

        </div>
    </section>
</main>