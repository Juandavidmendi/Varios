<?php
    class Consulta extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->datos = [];
            
        }
        function render(){
            $alumnos = $this->view->datos = $this->model->get();
            $this->view->alumnos = $alumnos;
            $this->view->render('consulta/index');
        }
        function verAlumno($param = null){
            $idAlumno = $param[0];
            $alumno = $this->model->getById($idAlumno);
            session_start();
            $_SESSION['id_verAlumno'] = $alumno->matricula;
            $this->view->alumno = $alumno;
            $this->view->mensaje = "";
            $this->view->render('consulta/detalle');
        }
        function actualizarAlumno(){
            session_start();
            $matricula = $_SESSION['id_verAlumno'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];

            unset($_SESSION['ide_verAlumno']);

            if($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){
                //actualizar alumno exito
                $alumno = new Alumno();
                $alumno->matricula = $matricula;
                $alumno->nombre    = $nombre;
                $alumno->apellido  = $apellido;

                $this->view->alumno = $alumno;
                $this->view->mensaje = "El alumno se ha atualizado satisfactoriamente";

            }else{
                //mensaje de error
                $this->view->mensaje = "El alumno se no ha atualizado satisfactoriamente";
            }
            $this->render('consulta/detalle');

        }
        function eliminarAlumno($param = null){
            $matricula = $param[0];

            if($this->model->delete($matricula)){
                //$this->view->mensaje = "El alumno se ha eliminado satisfactoriamente";
                $mensaje = "Alumno eliminado correctamente";
            }else{
                //$this->view->mensaje = "El alumno se no ha eliminado satisfactoriamente";
                $mensaje = "Alumno eliminado correctamente";
            }
            //$this->render();

            echo $mensaje;
        }
    }
?>