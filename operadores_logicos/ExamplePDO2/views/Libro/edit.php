<main class="container">

    <div class="row">
        <h1 class="col-12 d-flex justify-content-center"> Editar Pelicula </h1>
    </div>

    <section class="row mt-5">
        <div class="card w-50 m-auto">

            <div class="card-header">
                Editar Pelicula
            </div>

            <div class="card-body">

            <form method="POST" action="?controller=movie&method=update">

<input type="hidden" name="idLibro" class="form-control" value="<?php echo $data[0]->idLibro; ?>">

<div class="form-group">
    <label for="name">Titulo</label>
    <input type="text" name="nombreLibro" class="form-control" placeholder="Ingrese el rol" value="<?php echo $data[0]->nombreLibro; ?>">
</div>

<div class="form-group">
    <button class="btn btn-primary">Guardar</button>
</div>
</form>
         </div>

        </div>
    </section>
</main>