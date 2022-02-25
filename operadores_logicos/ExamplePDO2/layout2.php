<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bulma.min.css">
    <link rel="stylesheet" href="assets/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/style.css">
    <title>Inicio</title>
</head>

<body>
<?php
session_start();
$correoUsuario = $_SESSION['username'];

if(!isset($correoUsuario)){
    header("location: ?controller=Home&method=index");


}else{  
    
    echo "<h1>BIENVENIDO $correoUsuario </h1>";


    echo "<a href='logica/salir.php'> SALIR</a>";
    


    
    
}

?>
    <header>
      
        <nav class="navbar">
        
            <header class="nabvar-mobile is-size-5-mobile">
                <a class="navbar-mobile-link has-text-white" href="#" id="btn-mobile"><i class="zmdi zmdi-menu"></i></a>
                <a class="navbar-mobile-link has-text-white" href="layout2.php">  <h1 class="title-cover"> <img src="assets/img/letra.png" alt=""></h1>Biblioteca Virtual Jaime Pardo Leal</a>
                <a class="navbar-mobile-link has-text-white" href="#"><i class="zmdi zmdi-shopping-cart"></i> Vacio</a>
            </header>
            <nav class="nav-menu border" id="mySidenav">
                <form class="form-group " action="#">
                    <div class="form-group-container">
                        <span class="form-group-icon"><i class="zmdi zmdi-search"></i></span>
                        <input type="text" class="form-group-input" placeholder="Buscar...">
                    </div>
                </form>

                <a class="is-hidden-mobile brand is-uppercase has-text-weight-bold has-text-dark  "  href="layout2.php"> <h1 class="title-cover"> <img src="assets/img/letra.png" alt=""></h1>     </a>
                <ul class="nav-menu-ul">
                    <li class="nav-menu-item" id="men">
                        <a class="nav-menu-link link-submenu active" href="#">Categorias <i
                                class="zmdi zmdi-chevron-down"></i></a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                        <strong>Genero Lirico</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Oda</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Himno</a>
                                        </li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Elegia</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Cancion</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">
                                        <strong>Genero Epico</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Cuento</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Leyenda</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Fábula</a></li>
                                   
                                    </ul>
                                </li>
                            </ul>
                          
                        </div>
                    </li>
                    
                    
                    <li class="nav-menu-item"><a href="#" class="nav-menu-link">Prestamos</a></li>
                    <li class="nav-menu-item"><a href="index.php" class="nav-menu-link">Registro</a></li>
                    <li class="nav-menu-item"><a href="index.php" class="nav-menu-link">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </nav>
    </header>
    <!-- Banner -->
    <div class="banner banner-cover">
        <div class="banner-container ">
            <h1 class="title-cover"> <img src="assets/img/letra.png" alt=""></h1>
      
        </div>
    </div>

    <!-- Barra de navegacion secundaria -->
   
	<section class="padding">

<div class="container padding">
    

    <hr> 

    <h2 class="padding">Libros mas buscados</h2>

    <ul class="livros">
        <li>
            <h3>La biblia de los caidos</h3>
            <h4>Richard dubell</h4>
            <a href="producto.html">
                <div class="imghover" title="Até Mais, e Obrigado Pelos Peixes"></div>
                <img src="assets/img/livros/livro (1).jpg" alt="La biblia de los caidos">
            </a>

        </li>

        <li>
            <h3>Bajo la misma estrella</h3>
            <h4>Jhon Green</h4>
            <a href="producto.html">
                <div class="imghover" title="A Biblioteca Mágica de Bibbi Bokken"></div>
                <img src="assets/img/livros/livro (2).jpg" alt="Bajo la misma estrella">
            </a>
        </li>

        <li>
            <h3>Orgullo y prejuicio</h3>
            <h4>Jane Austen</h4>
            <a href="producto.html">
                <div class="imghover" title="Hitman - A Condenação"></div>
                <img src="assets/img/livros/livro (3).jpg" alt="Orgullo y prejuicio">
            </a>
        </li>

        <li>
            <h3>El dia que se perdio la cordura</h3>
            <h4>Javier Castillo</h4>
            <a href="producto.html">
                <div class="imghover" title="Jogos Vorazes - Em Chamas"></div>
                <img src="assets/img/livros/livro (8).jpg" alt="El dia que se perdio la cordura" >
            </a>
        </li>

        <li>
            <h3>El silencio de la ciudad blanca</h3>
            <h4>Mark Lawrence</h4>
            <a href="producto.html">
                <div class="imghover"></div>
                <img src="assets/img/livros/livro (4).jpg" alt="Rei dos Tronos" title="Rei dos Tronos">
            </a>
        </li>

        <li>
            <h3>El visitante</h3>
            <h4>Stephen king</h4>
            <a href="producto.html">
                <div class="imghover"></div>
                <img src="assets/img/livros/livro (5).jpg" alt="El visitante" title="O Diário de Um Mago">
            </a>
        </li>

        <li>
            <h3>La Luz que no peudes ver</h3>
            <h4>Anthonio Dorr</h4>
            <a href="producto.html">
                <div class="imghover"></div>
                <img src="assets/img/livros/livro (6).jpg" alt="Anthonio Dorr" title="O Sangue do Olimpo">
            </a>
        </li>

        <li>
            <h3>El dia que se perdio el amor</h3>
            <h4>Javier Castillo</h4>
            <a href="producto.html">
                <div class="imghover"></div>
                <img src="assets/img/livros/livro (7).jpg" alt="La luz que no puedes ver" title="Como Treinar o seu Dragão">
            </a>
        </li>
    </ul>

    <a href="livros.html" class="button right">VER MAS</a>
</div>

<div class="clear padding"></div>

<div class="info">
    <div class="container">
        <img src="assets/img/livro.jpg">

        <h1>Como Funciona?</h1>
        <p>En la biblioteca Jaime Pardo Leal lo que mas nos importa es la sensacion de leer un libro, no hay nada mas gratificante que esto, entendemos lo tedioso que es hacer filas largas para leer nuestro libro favorito o un libro para una tarea, por eso con nuestra pagina web; podras escoger un titulo entre nuestro gran repertorio, tu lo pides nosotros lo entregamos</p>
        <a href="sobre.html" class="button white">Sobre nosotros</a>
    </div>
</div>

<div class="clear"></div>

<div class="container padding">
    <h2>Recomendados</h2>

    <ul class="livros">

        <li>
            <h3>La vida del universo y lo demas</h3>
            <h4>Douglas Adams</h4>
            <a href="producto.html">
                <div class="imghover" title="La vida del universo y lo demas"></div>
                <img src="assets/img/livros/livro (13).jpg" alt="A Vida, O Universo e Tudo Mais">
            </a>
        </li>

        <li>
            <h3>El señor de los anillos</h3>
            <h4>Martin Fontes</h4>
            <a href="producto.html">
                <div class="imghover" title="El señor de los anillos"></div>
                <img src="assets/img/livros/livro (12).jpg" alt="Senhor dos Anéis">
            </a>

        </li>

        
        <li>
            <h3>El robo</h3>
            <h4>Isaac Asimov</h4>
            <a href="producto.html">
                <div class="imghover" title="Eu, Robô"></div>
                <img src="assets/img/livros/livro (14).jpg" alt="Eu, Robô">
            </a>
        </li>

        <li>
            <h3>Hijos del eden, años de muerte</h3>
            <h4>Eduardo Sphor</h4>
            <a href="producto.html">
                <div class="imghover" title="Filhos de Éden: Anjos da Morte"></div>
                <img src="assets/img/livros/livro (15).jpg" alt="Filhos de Éden: Anjos da Morte">
            </a>
    </ul>

    <hr>

    <h2 class="padding">Editoras Favoritas</h2>

    <ul class="editoras">
        <li>
            <h3>Intrinseca</h3>
            <img src="assets/img/editoras/editora (2).jpg" alt="Intrinseca" title="Intrinseca">
        </li>

        <li>
            <h3>Sextante</h3>
            <img src="assets/img/editoras/editora (3).jpg" alt="Sextante" title="Sextante">
        </li>

        <li>
            <h3>Arqueiro</h3>
            <img src="assets/img/editoras/editora (4).jpg" alt="Arqueiro" title="Arqueiro">
        </li>

        <li>
            <h3>Galera</h3>
            <img src="assets/img/editoras/editora (5).jpg" alt="Galera" title="Galera">
        </li>

        <li>
            <h3>Leya</h3>
            <img src="assets/img/editoras/editora (6).jpg" alt="Leya" title="Leya">
        </li>

        <li>
            <h3>DarkSide</h3>
            <img src="assets/img/editoras/editora (7).jpg" alt="DarkSide" title="DarkSide">
        </li>

        <li>
            <h3>Versus</h3>
            <img src="assets/img/editoras/editora (9).jpg" alt="Versus" title="Versus">
        </li>

        <li>
            <h3>Pandorga</h3>
            <img src="assets/img/editoras/editora (10).jpg" alt="Pandorga" title="Pandorga">
        </li>
    </ul>
</div>
</section>
    <div class="container container-full">
    <div class="columns is-centered is-multiline">
        <div class="column is-full">
            <div class="separator"></div>
        </div>
        <div class="column is-half-tablet is-one-third-desktop column-half">
            <div class="card card-second">
                <img class="card-second-image" src="assets/img/lookbook-men.png" alt="">
                <div class="card-second-body --text-right">
                    <h1 class="has-text-right is-size-4 has-text-weight-semibold-bold">Mario Mendoza</h1>
                    <p class="has-text-right">Mario Mendoza ​ es un escritor, catedrático, profesor y periodista colombiano
                    </p>
                    <div>
                        <a href="#" class="btn btn-default is-size-7">Ver ahora</a>
                    </div>
                    </p>
                    
                    
                </div>
            </div>
        </div>
        <div class="column is-half-tablet is-one-third-desktop column-half">
            <div class="card card-second">
                <img class="card-second-image" src="assets/img/lookbook-women.png" alt="">
                <div class="card-second-body --text-right">
                    <h1 class="has-text-right is-size-4 has-text-weight-semibold-bold">Miguel de Cervantes</h1>
                    <p class="has-text-right">Miguel de Cervantes Saavedra fue un novelista, poeta, dramaturgo y soldado español. Está considerado la máxima figura de la literatura española
                    </p>
                    <div>
                        <a href="#" class="btn btn-default is-size-7">Ver ahora</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="column is-half-tablet is-one-third-desktop">
            <div class="card card-second">
                <img class="card-second-image" src="assets/img/lookbook-you.png" alt="">
                <div class="card-second-body --text-right">
                    <h1 class="has-text-right is-size-4 has-text-weight-semibold-bold">Edgar allan poe</h1>
                    <p class="has-text-right">Edgar Allan Poe fue un escritor, poeta, crítico y periodista romántico​​ estadounidense, generalmente reconocido como uno de los maestros universales del relato corto, del cual fue uno de los primeros practicantes en su país.
                    </p>
                    <div>
                        <a href="#" class="btn btn-default is-size-7">Ver ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="js/main.js"></script>

    <footer class="footer">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column">
                    <ul class="footer-ul">
                    </ul>
                </div>

                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Porqué comprar</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios y retornos</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios seguros</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Testimonios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Award waining</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Etival trading</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Tu cuenta</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Iniciar sesión</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Registro</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver carrito </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver catálogo</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Track an order</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Catalogo</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para hombres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column">

                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Datos de contacto</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Head</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column">

                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Datos de contacto</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Head</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
               
            </div>
        </div>

        <div class="footer-bar-top">
            
            <div class="container">
                <a class="footer-bar-top-links centro" href="#">2020 Biblioteca Jaime Pardo Leal</a>
            </div>
        </div>
    </footer>
</body>

</html>