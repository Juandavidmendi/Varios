<?php
//files es el arreglo que me permite obtener la informacion del archivo
    //var_dump($_FILES['file']['name']);
    $directorio = "uploads/";
    $archivo = $directorio . basename($_FILES["file"]["name"]);
    
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    
    //validar si es imagen
    $checarsiImagen = getimagesize($_FILES["file"]["tmp_name"]);

    //var_dump($size);

    if($checarsiImagen != false){
        //validando el tama;o del archivo
        $size = $_FILES["file"]["size"];

        if($size > 500000){
            echo "El archivo tiene que ser menor a 500KB";
        }else{
            //validar el tipo de imagen
            if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg"){
                //si se valida el archivo correctamente
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){
                    echo " El archivo se ha subido correctamente"; 
                }else{
                    echo "Hubo un erro al subir el archivo";
                }
            }else{
                echo "Solo se admiten archivos jpg/jpeg";
            }
        }
    }else{
        echo "El archivo no es una imagen";
    }
?>