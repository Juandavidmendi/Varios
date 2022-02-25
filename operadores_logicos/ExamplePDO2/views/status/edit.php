<main class="container">

    <div class="row">
        <h1 class="col-12 d-flex justify-content-center">Editar Estados</h1>
    </div>

    <section class="row mt-5">

        <div class="card w-50 m-auto">

            <div class="card-header container">
                <h2 class="m-auto">Editar Estado</h2>
            </div>

            <div class="card-body">
                <form method="POST" action="?controller=status&method=update">

                    <input type="hidden" name="id" class="form-control" value="<?php echo $data[0]->id; ?>">

                    <div class="form-group">
                        <label for="name">Estado</label>
                        <input type="text" name="name" class="form-control" placeholder="Ingrese el rol" value="<?php echo $data[0]->name; ?>">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>

            </div>

        </div>
    </section>
</main>