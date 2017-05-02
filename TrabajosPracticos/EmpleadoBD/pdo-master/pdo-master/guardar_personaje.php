<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Empleado.php';
    
    $empleado_id = (isset($_REQUEST['empleado_id'])) ? $_REQUEST['empleado_id'] : null;
    
    if($empleado_id){        
        $empleado = Empleado::buscarPorId($empleado_id);        
    }else{
        $empleado = new Empleado();
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
        $dni = (isset($_POST['dni'])) ? $_POST['dni'] : null;
        $apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : null;
        $foto = (isset($_POST['foto'])) ? $_POST['foto'] : null;
        $empleado->setNombre($nombre);
        $empleado->setDNI($dni);
        $empleado->setApellido($apellido);
        $empleado->setFoto($foto);
        $empleado->guardar();
        header('Location: index.php');
    }else{
        include 'vistas/guardar_personaje.php';
    }
    
?>
