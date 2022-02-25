<?php

//metodo nativopara el tratamiento de datos
                 //nombre del campo//nombre del archivo
crearMiniatura($_FILES['imagen']['name']);//arreglo bidimensional

function crearMiniatura($nombreArchivo){
    $finalWidth     = 100; //tamano final de nuestra imagen
    $dirFullImage   = 'imagenes/full/'; //directorio de imagenes
    $dirThumbImage  = 'imagenes/thumbs'; //directorio de miniaturas
    $tmpName        = $_FILES['imagen']['tmp_name'];//nombre temporal de la imagen
    $finalName      = $dirFullImage . $_FILES['imagen']['name']; //Nombre final
    
    copiarImagen($tmpName, $finalName);

    $im = null;
    //validar un patron
    if(preg_match('/[.](jpg)$/', $nombreArchivo)){
        $im = imagencreatefromjpeg($finalName); //mapear la abse de un archivo jpg
    }else if(preg_match('/[.](gif)$/', $nombreArchivo)){
        $im = imagencreatefromgif($finalName);
    }else if(preg_match('/[.](png)$/', $nombreArchivo)){
        $im = imagecreatefrompng($finalName);
    }

    $width = imagesx($im);
    $height = imagesy($im);

    $minWidth  = $finalWidth;
    $minHeight = floor($height *($finalWidth / $width));

    $imageTrueColor = imagecreatetrueColor($minWidth, $minHeight);
    imagecopyresized($imageTrueColor, $im, 0, 0, 0, 0, $minWidth, $minHeight, $width, $height);

    if(!file_exists($dirThumbImage)){
        if(!mkdir($dirThumbImage)){
            die("Hubo un problema con la miniatura");
        }
    }

    imagejpeg($imageTrueColor, $dirThumbImage . $nombreArchivo);
}

function copiarImagen($origen, $destino){
    move_uploaded_file($origen, $destino); //mueve la imagen
}

?>