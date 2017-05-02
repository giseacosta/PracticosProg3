<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Empleado.php';
    
    $empleado_id = (isset($_REQUEST['empleado_id'])) ? $_REQUEST['empleado_id'] : null;
    
    if($empleado_id){
        $empleado = Empleado::buscarPorId($empleado_id);        
        $empleado->eliminar();
        header('Location: index.php');
    }
    
?>