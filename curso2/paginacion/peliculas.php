<?php
include 'db.php';

class Peliculas extends DB{
    private $paginaActual;//pagina en la que se encuentra el usuario
    private $totalPaginas;//va a guardar cuantas paginas se crearon apartir de los resultados
    private $nResultados;//conteo de todos los resultados que arroja nuestra busqueda
    private $resultadosPorPagina;//mostrara la cantidad de resultados que quiero ver en la paginacion
    private $indice;//nos ayudara a posicionar y saber en que posicion nos encontramos

    function __construct($nPorPagina){
        parent::__construct();

        $this->resultadosPorPagina = $nPorPagina;//mapear o asignar
        $this->indice = 0;//se inicializa para que recien entre a la pagina muestre el primer indice
        $this->paginaActual = 1;

        $this->calcularPaginas();
    }
    function calcularPaginas(){
        $query = $this->connect()->query('SELECT COUNT(*) AS total FROM pelicula');
        $this->nResultados = $query->fetch(PDO::FETCH_OBJ)->total; //mapear este resultado
        $this->totalPaginas = $this->nResultados / $this->resultadosPorPagina;
  
        if(isset($_GET['pagina'])){
        //validar que pagina sea un numero
            if(is_numeric($_GET['pagina'])){
                if($_GET['pagina'] >= 1 && $_GET['pagina'] <= $this->totalPaginas){
                    $this->paginaActual = $_GET['pagina'];
                    $this->indice = ($this->paginaActual - 1) * ($this->resultadosPorPagina);
                }else{
                    echo "No existe esa pagina";
                }
            }else{
                 //confirmar error
                echo "Error al mostrar la pagina";
            }  
            //validar que pagina sea mayor o igual a 1y menor o igual a totalpaginas
        }
    }

    function mostrarPeliculas(){

    }

    function mostrarPaginas(){
        
    }
}

?>