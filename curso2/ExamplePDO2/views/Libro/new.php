<main class="container">

    <div class="row">
        <h1 class="col-12 d-flex justify-content-center">Nuevo Libro</h1>
    </div>

    <section class="row mt-5">
        <div class="card w-50 m-auto">
            <div class="card-header container">
                <h2 class="m-auto">Agregar Libro</h2>
            </div>

            <div class="card-body">
                <form id="form">
                <div class="form-group"  method="POST" action="?controller=movie&method=save">
                        <label for="name"> ID libro</label>
                        <input type="text" id="idLibro" class="form-control" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="name"> Titulo</label>
                        <input type="text" id="nombreLibro" class="form-control" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="name"> ISBN</label>
                        <input type="text" id="ISBN" class="form-control" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="name"> stan</label>
                        <input type="text" id="stanLibro" class="form-control" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="name"> ID Autor</label>
                        <input type="text" id="Autor_idAutor1" class="form-control" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="name"> ID Categoria</label>
                        <input type="text" id="Categoria_idCategoria" class="form-control" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="name"> ID Estado</label>
                        <input type="text" id="Estado_idEstado" class="form-control" placeholder="Ingrese el nombre">
                    </div>   
                    <div class="form-group">
                        <label for="name"> ID Editorial</label>
                        <input type="text" id="Editorial_idEditorial" class="form-control" placeholder="Ingrese el nombre">
                    </div>
                    
                    <input type="file" class="border-primary" required name="imagen" /> <br> <br>
                    
                    

                    </div>
                    <div class="form-group">
                        <a href="" id="add" class="btn btn-primary">Agregar</a>
                    </div>
                    <div id="infoCategories">

                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success" id="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<script src="assets/js/movie.js"></script>