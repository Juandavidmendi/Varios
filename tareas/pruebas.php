

echo '<div class="card">
  <div class="card-body">
  <input type="checkbox">
  '.$texto.'
  </div>
</div>' ;




<?php



            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];
                
                $sql = "INSERT INTO todoTable(texto, completado)
                                    VALUES('$texto', false)";
                if($conexion->query($sql) === true){
                    //echo '<div><form action =""><input type="checkbox">'.$texto.'</form></div>';
                    
                    echo '
                    <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'.$texto.'</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
                        <a href="#" class="btn btn-primary">Completado</a>
                    </div>
                    </div>
                    </div>
                    <br>' ;
                }else{
                    die("Error al insertar datos: " . $conexion->error);
                }
                
            }
            $sql = "SELECT * FROM todoTable"; 
            $resultado = $conexion->query($sql);

            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    //echo '<div><form action =""><input type="checkbox">'.$row['texto'].'</form></div>';
                    echo '
                    <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <input type="checkbox">
                        <h5 class="card-title">'.$row['texto'].'</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
                        <a href="#" class="btn btn-primary">Completado</a>
                    </div>
                    </div>
                    </div>
                    <br>';
                }    
            }
            
            $conexion->close();
        ?>