<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #364C07; 
            box-sizing: border-box; 
            font-family: Arial;
        }
        form{
            background-color: white;
            padding: 10px;
            margin: 100px auto;
            width: 400px;
        }
        input[type=text], input[type=password]{
            padding: 10px;
            width: 380px;
        }
        input[type="submit"]{
            border: "0";
            background-color: #ff9185;
            padding: 10px;
        }
        .error{
            background-color: #F41207;
            font-size: 12px;
            padding: 10px;
        }
        .correcto{
            background-color: #59AD06
        }
    </style>
</head>
<body>
    <form action="formulario.php" method="post">
    <?php
        $nombre   = "";
        $password = "";
        $email    = "";
        $pais     = "";
        $nivel    = "";

        $lenguajes = array();

    if(isset($_POST['nombre'])){
        $nombre   = $_POST['nombre'];
        $password = $_POST['password'];
        $email    = $_POST['email'];
        $pais     = $_POST['pais'];

        if(isset($_POST['nivel'])){
            $nivel = $_POST['nivel'];
        }else{
            $nivel = "";
        }
        if(isset($_POST['lenguajes'])){ 
            $lenguajes = $_POST['lenguajes'];
        }else{
            $lenguajes = "";
        }
        $campos = array();

        if($nombre == ""){
            array_push($campos, "El campo nombre no puede estar vacio");
        }
        if($password =="" || strlen($password) < 6){
            array_push($campos, "El campo password no puede estar vacio ni tener menos de 6 caracteres");
        }
        if($email =="" || strpos($email, "@") === false){
            array_push($campos, "Ingresa un correo electronico valido");
        }
        if($pais == ""){
            array_push($campos, "Selecciona un pais de origen.");
        }
        if($nivel == ""){
            array_push($campos, "Selecciona un nivel de desarrollo.");
        }
        if($lenguajes =="" || count($lenguajes) < 2){
            array_push($campos, "Selecciona almenos dos lenguajes de programacion");
        }
        if(count($campos) > 0){
            echo "<div class='error'>";
            for($i = 0; $i < count($campos);  $i++){
                echo "<li>".$campos[$i]."</i>";
            }
        }else{
            echo "<div class='correcto'>
                        Datos correctos";
        }
        echo "</div>";
    }

    ?>
    <p>
        <label>Nombre:</label> <br/>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>">  
    </p>
    <p>
        <label>Password: </label><br/>
        <input type="password" name="password" value="<?php echo $password;?>">  
    </p>
    <p>
        <label>Correo electrónico:</label><br/>
        <input type="text" name="email" value="<?php echo $email; ?>">  
    </p>
    <p>
        <!-- Como validar listas con PHP-->
        Pais de origen:
        <select name="pais" id="">
            <option value="">Selecciona un pais</option>
            <option value="mx" <?php if($pais == "mx") echo "selected"; ?>>Mexico</option>
            <option value="eu" <?php if($pais == "eu") echo "selected"; ?>>Estados Unidos</option>
            <option value="es" <?php if($pais == "es") echo "selected"; ?>>Spain</option>
            <option value="ar" <?php if($pais == "ar") echo "selected"; ?>>Argentina</option>
            <option value="ch"> <?php if($pais == "ch") echo "selected"; ?>China</option>
        </select>
    </p>
    <p>
        <label >Nivel de desarrollo:</label><br>
        <input type="radio" name="nivel" value="principiante" <?php if($nivel =="principiante") echo "checked"; ?>>Principiante
        <input type="radio" name="nivel" value="intermedio"   <?php if($nivel =="intermedio") echo "checked"; ?>>Intermedio
        <input type="radio" name="nivel" value="avanzado"     <?php if($nivel =="avanzado") echo "checked"; ?>>Avanzado
    </p>
    <p>
        <label>Lenguajes de programacion</label><br>
        <input type="checkbox" name="lenguajes[]" value="php" <?php if(in_array("php", $lenguajes)) echo "checked";?>>PHP<br>
        <input type="checkbox" name="lenguajes[]" value="js" <?php if(in_array("js", $lenguajes)) echo "checked";?>>JavaScript<br>
        <input type="checkbox" name="lenguajes[]" value="java" <?php if(in_array("java", $lenguajes)) echo "checked";?>>Java<br>
        <input type="checkbox" name="lenguajes[]" value="swift" <?php if(in_array("swift", $lenguajes)) echo "checked";?>>Swirft<br>
        <input type="checkbox" name="lenguajes[]" value="py" <?php if(in_array("py", $lenguajes)) echo "checked";?>>Python<br>
    </p>
    <p><button type="submit" value="enviar datos">Enviar</button></p>

    </form>
</body>
</html>