<?php
error_reporting(0); 
require_once __DIR__ . '/vendor/autoload.php';
require_once 'model.php';

$alumnos = new Model();

$lista = $alumnos->getAll();

//var_dump($lista);
$html = '<img src="1.png" width="300px"/> 
<h1>Tabla de alumnos</h1>
        <table>
            <tr>
                <td>Id</td><td>Nombres</td><td>Apellidos</td><td>Curso</td><td>Edad</td><td>Fecha de Nacimiento</td><td>Genero</td>
            </tr>';

foreach ($lista['items'] as $item) {
    //echo $item['nombre'];
    $html .= '<tr>
                <td>'.$item['id'].'</td>
                <td>'.$item['nombre'].'</td>
                <td>'.$item['apellido'].'</td>
                <td>'.$item['curso'].'</td>
                <td>'.$item['edad'].'</td>
                <td>'.$item['fecha'].'</td>
                <td>'.$item['genero'].'</td>
                <tr>';
}
$html .= '</table>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();


?>